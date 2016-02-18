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
     * Поиск товаров
     */
    public function search_items(){
        $search = $this->input->post('search');
        $items = array();

        $this->db->like('name_ru', $search, 'both');
        $this->db->or_like('manufacturer', $search, 'both');
        $this->db->or_like('sku', $search, 'both');
        $this->db->or_like('descr_ru', $search, 'both');

        $items = $this->db->get($this->_table_equipment)->result();

        return $items;
    }

    /**
     * Сохраняет запись в базе
     */
    public function save_record($id = null)
    {
        date_default_timezone_set('Europe/Moscow');
        $date = new DateTime(date('Y-m-d H:i:s', time()), new DateTimeZone('Europe/Moscow'));

        $patterns = array(
            0 => '/<script.*\/script>/is',
            1 => '/<\?.*\?>/is',
            2 => '/<!--\?.*\?-->/is'
        );

        $replacements = array( 0 => '' );

        $data = array(
            'name_ru' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('name_ru') ), ENT_QUOTES, 'UTF-8'),
            'name_en' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('name_en') ), ENT_QUOTES, 'UTF-8'),
            'name_arabic' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('name_arabic') ), ENT_QUOTES, 'UTF-8'),
            'sku' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('sku') ), ENT_QUOTES, 'UTF-8'),
            'warranty' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('warranty') ), ENT_QUOTES, 'UTF-8'),
            'manufacturer' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('manufacturer') ), ENT_QUOTES, 'UTF-8'),
            'manufacturer_url' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('manufacturer_url') ), ENT_QUOTES, 'UTF-8'),
            'descr_ru' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('descr_ru') ), ENT_QUOTES, 'UTF-8'),
            'descr_en' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('descr_en') ), ENT_QUOTES, 'UTF-8'),
            'descr_arabic' => htmlspecialchars( preg_replace( $patterns, $replacements, $this->input->post('descr_arabic') ), ENT_QUOTES, 'UTF-8'),
            'date' => $date->format('Y-m-d H:i:s')
        );

        if( is_null($id) ):
            $this->db->insert($this->_table_equipment, $data);

            $result = array('id' => $this->db->insert_id());
            if( $this->db->affected_rows() ):
                $result['code'] = 0;
            else:
                $result['code'] = 1;
            endif;
        else:
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