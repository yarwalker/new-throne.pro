<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment_model extends CI_Model {
    private $_table_equipment = 'equipment',
            $_table_qalleries = 'galleries';

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Выдает список записей каталога
     * @return mixed
     */
    public function get_items()
    {
        return $this->db->get('equipment')->result();
    }

    /**
     * Сохраняет запись в базе
     */
    public function save_record($id = null)
    {
        date_default_timezone_set('Europe/Moscow');
        $date = new DateTime(date('Y-m-d H:i:s', time()), new DateTimeZone('Europe/Moscow'));

        if( is_null($id) ):
            $data = array(
                'name_ru' => $this->input->post('name_ru'),
                'name_en' => $this->input->post('name_en'),
                'name_arabic' => $this->input->post('name_arabic'),
                'warranty' => $this->input->post('warranty'),
                'manufacturer' => $this->input->post('manufacturer'),
                'manufacturer_url' => $this->input->post('manufacturer_url'),
                'descr_ru' => $this->input->post('descr_ru'),
                'descr_en' => $this->input->post('descr_en'),
                'descr_arabic' => $this->input->post('descr_arabic'),
                'date' => $date->format('Y-m-d H:i:s')
            );

            $this->db->insert($this->_table_equipment, $data);

            $result = array('id' => $this->db->insert_id());
            if( $this->db->affected_rows() ):
                $result['code'] = 0;
            else:
                $result['code'] = 1;
            endif;


        else:
            $data = array(
                'name_ru' => $this->input->post('name_ru'),
                'name_en' => $this->input->post('name_en'),
                'name_arabic' => $this->input->post('name_arabic'),
                'warranty' => $this->input->post('warranty'),
                'manufacturer' => $this->input->post('manufacturer'),
                'manufacturer_url' => $this->input->post('manufacturer_url'),
                'descr_ru' => $this->input->post('descr_ru'),
                'descr_en' => $this->input->post('descr_en'),
                'descr_arabic' => $this->input->post('descr_arabic'),
                'date' => $date->format('Y-m-d H:i:s')
            );

            $this->db->where('id', $id);
            $this->db->update($this->_table_equipment, $data);

            $result = array('id' => $id);
            if( $this->db->affected_rows() ):
                $result['code'] = 0;
            else:
                $result['code'] = 1;
            endif;


        endif;

        return $result;
    }

    /**
     * Удаляет запись из каталога
     */
    public function delete_record($id)
    {
        //$this->db->where('id', $id);

        // удаляем картинки
        /*$images = $this->db->get($this->_table_qalleries)->result();
        foreach( $images as $img ):
            if( file_exists( getcwd() . '/' . ) )
            unlink($img->image_path);
        endforeach;*/

        $this->db->where('eq_id', $id);
        $this->db->delete($this->_table_qalleries);

        $this->db->where('id', $id);
        $this->db->delete($this->_table_equipment); // удаляем запись

        if( $this->db->affected_rows() ):
            return 0;
        else:
            return 1;
        endif;
    }

    /**
     * удаляем изображение из базы
     */
    public function delete_image($id)
    {
        $this->db->where('eq_id', $id);
        $this->db->delete($this->_table_qalleries);

        if( $this->db->affected_rows() ):
            return 0;
        else:
            return 1;
        endif;
    }

    /**
     * Выбираем запись
     */
    public function get_item($id)
    {
        $item = array();
        $this->db->where('id', $id);
        $item['equipment'] = $this->db->get($this->_table_equipment)->result();

        $this->db->where('eq_id', $id);
        $item['images'] = $this->db->get($this->_table_qalleries)->result();

        return $item;
    }

    /**
     * Сохраняем изображения
     */
    public function save_images($arr = array())
    {
        if( !empty($arr['id']) && !empty($arr['image_url']) && !empty($arr['image_path']) ):
            // Удаляем старые картинки
            $this->db->where('eq_id', $arr['id']);
            $this->db->delete($this->_table_qalleries);

            // добавляем новые
            $data = array(
                'eq_id' => $arr['id'],
                'image_url' => $arr['image_url'],
                'image_path' => $arr['image_path']
            );
            $this->db->insert($this->_table_qalleries, $data);

            if( $this->db->affected_rows() ):
                $result = 0;
            else:
                $result = 1;
            endif;
        else:
            // пустой массив
            $result = 4;
        endif;

        return $result;
    }

    /**
     * Удаляем все картинки данного оборудования
     */
    public function delete_images($id = null)
    {
        $result = 0;

        if( is_null($id) ):
            $result = 5;
        else:
            $this->db->where('eq_id', $id);
            $query = $this->db->get($this->_table_qalleries);

            if( $query->num_rows() ):
                $this->db->where('eq_id', $id);
                $this->db->delete($this->_table_qalleries);

                if( !$this->db->affected_rows() ):
                    $result = 6;
                endif;
            else:
                $result = 7;
           endif;


        endif;

        return $result;
    }
}