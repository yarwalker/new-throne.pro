<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('equipment_model');
    }

    /**
     * Заглушка
     */
    public function index()
    {
        $this->load->view('equipment/index');
    }

    /**
     * Сохраняем запись в базу
     */
    public function save()
    {
        if( $this->is_logged_in() ):
            $code = 0;
            $str = 'Запись успешно сохранена';

            if( $this->input->post('id') ):
                $id = filter_var($this->input->post('id'), FILTER_VALIDATE_INT);
            else:
                $id = null;
            endif;

            if( $id === false ):
                // $id is not integer
                $code = 2;
                $str = 'Параметр ID должен быть целочисленным';
            else:
                // $id is integer or null

                // сохраняем данные оборудования
                $result = $this->equipment_model->save_record($id);

                if( $result['code'] ):
                    // ошибка при сохранении
                    $error = $this->db->error();
                    $code = $error->code;
                    $str = $error->message;
                else:
                    // запись сохранили
                    // сохраняем картинки
                    $id = $result['id'];

                    if( isset($_FILES['image']) && $_FILES['image']['error'] != 4 ):
                        $data = Array();
                        $config['upload_url']    = 'assets/uploads/';
                        $config['upload_path']   = './'.$config['upload_url'];
                        $config['file_name']  	 = time();
                        $config['allowed_types'] = 'jpg|png|gif';
                        $config['max_size']	 	 = '2000000';
                        //$config['max_width']  = '250';
                        //$config['max_height']  = '200';
                        # library upload
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if ( ! $this->upload->do_upload('image')):
                            $str = $this->upload->display_errors();
                            $code = 3;
                        else:
                            $data = $this->upload->data();

                            //array(base_url($config['upload_url'] . $config['file_name'] . $data['file_ext'])))

                            $arr = array(
                                'id' => $id,
                                'image_url' => base_url($config['upload_url'] . $config['file_name'] . $data['file_ext']),
                                'image_path' => $config['upload_url'] . $config['file_name'] . $data['file_ext']
                            );
                            $result = $this->equipment_model->save_images($arr);

                            if( $result == 1 ):
                                $code = 1;
                                $str = 'Изображения не удалось сохранить.';
                            elseif( $result == 4 ):
                                $code = 1;
                                $str = 'Недостаточно параметров для изображений. ';
                            endif;
                        endif;
                    else:

                        // в форме нет ни одной картинки, значит нужно удалить старые картинки
                       /* $result = $this->equipment_model->delete_images($id);

                        if( $result == 5 ):
                            $code = 1;
                            $str = 'Параметр ID не должен быть пустым.';
                        elseif( $result == 6 ):
                            $code = 0;
                            $str .= $this->db->error();
                        elseif( $result == 0 ):
                            $code = 0;
                            $str .= ' Все старые изображения оборудования удалены';
                        endif; */
                    endif;
                endif;
            endif;
        else:
            if( !$this->input->is_ajax_request() ):
                header('Location: ' . base_url('/'));
                exit();
            else:
                $str = 'Время сессии истекло, необходима повторная <a href="' . base_url('/') . '">авторизация</a>';
                $code = 12;
            endif;
        endif;

        echo json_encode( array( 'message' => $str, 'code' => $code ) );
    }

    /**
     * Удаляем изображение записи
     */
    public function delete_image()
    {
        if( $this->is_logged_in() ):
            $code = 0;
            $str = 'Изображение успешно удалено';
            $id = filter_var($this->input->post('id'), FILTER_VALIDATE_INT);

            if( $id === false ):
                // $id is not integer
                $code = 2;
                $str = 'Параметр ID должен быть целочисленным.';
            else:
                // $id is integer
                $result = $this->equipment_model->delete_image($id);
                if( $result ):
                    $error = $this->db->error();
                    $code = $error->code;
                    $str = $error->message;
                endif;
            endif;
        else:
            if( !$this->input->is_ajax_request() ):
                header('Location: ' . base_url('/'));
                exit();
            else:
                $str = 'Время сессии истекло, необходима повторная <a href="' . base_url('/') . '">авторизация</a>';
                $code = 12;
            endif;
        endif;

        echo json_encode( array( 'message' => $str, 'code' => $code ) );
    }

    /**
     * Удаляем запись из каталога
     */
    public function delete()
    {
        if( $this->is_logged_in() ):
            $code = 0;
            $str = 'Запись успешно удалена';
            $id = filter_var($this->input->post('id'), FILTER_VALIDATE_INT);

            if( $id === false ):
                // $id is not integer
                $code = 2;
                $str = 'Параметр ID должен быть целочисленным.';
            else:
                // $id is integer
                $result = $this->equipment_model->delete_record($id);
                if( $result ):
                    $error = $this->db->error();
                    $code = $error->code;
                    $str = $error->message;
                endif;
            endif;
        else:
            if( !$this->input->is_ajax_request() ):
                header('Location: ' . base_url('/'));
                exit();
            else:
                $str = 'Время сессии истекло, необходима повторная <a href="' . base_url('/') . '">авторизация</a>';
                $code = 12;
            endif;
        endif;

        echo json_encode( array( 'message' => $str, 'code' => $code ) );
    }

    /**
     * Выбираем одну запись для редактирования
     */
    public function get_item()
    {
        if( $this->is_logged_in() ):
            $id = filter_var($this->input->post('id'), FILTER_VALIDATE_INT);
            $item = null;
            $str = '';

            if( $id === false ):
                // $id is not integer
                $code = 2;
                $str = 'Параметр ID должен быть целочисленным.';
            else:
                // $id is integer
                $result = $this->equipment_model->get_item($id);
                if( is_array($result) && !empty($result) ):
                    $code = 0;
                    $item = $result;

                    $item['equipment'][0]->name_ru = htmlspecialchars_decode($item['equipment'][0]->name_ru);
                    $item['equipment'][0]->name_en = htmlspecialchars_decode($item['equipment'][0]->name_en);
                    $item['equipment'][0]->name_arabic = htmlspecialchars_decode($item['equipment'][0]->name_arabic);

                    $item['equipment'][0]->descr_ru = htmlspecialchars_decode($item['equipment'][0]->descr_ru);
                    $item['equipment'][0]->descr_en = htmlspecialchars_decode($item['equipment'][0]->descr_en);
                    $item['equipment'][0]->descr_arabic = htmlspecialchars_decode($item['equipment'][0]->descr_arabic);

                    $item['equipment'][0]->manufacturer = htmlspecialchars_decode($item['equipment'][0]->manufacturer);
                    $item['equipment'][0]->manufacturer_url = htmlspecialchars_decode($item['equipment'][0]->manufacturer_url);

                    $item['equipment'][0]->warranty = htmlspecialchars_decode($item['equipment'][0]->warranty);

                elseif(empty($result)):
                    $code = 11;
                    $str = 'Не найдено ни одного элемента с таким ID.';
                else:
                    $error = $this->db->error();
                    $code = $error->code;
                    $str = $error->message;
                endif;


            endif;
        else:
            if( !$this->input->is_ajax_request() ):
                header('Location: ' . base_url('/'));
                exit();
            else:
                $str = 'Время сессии истекло, необходима повторная <a href="' . base_url('/') . '">авторизация</a>';
                $code = 12;
                $item = array();
            endif;
        endif;

        echo json_encode( array( 'message' => $str, 'code' => $code, 'item' => $item ) );
    }

    /**
     * Отображает страницу оборудования
     */
    public function show($lang, $id)
    {
        switch( $lang ):
            case 'en':
                $lang_file = 'english';
                break;
            case 'arabic':
                $lang_file = 'arabic';
                break;
            default:
                $lang_file = 'russian';
        endswitch;

        $this->load->helper('language');
        $this->lang->load('show', $lang_file);

        $id = filter_var($id, FILTER_VALIDATE_INT);
        $item = null;
        $str = '';

        if( $id === false ):
            // $id is not integer
            $code = 2;
            $str = 'Параметр ID должен быть целочисленным.';
        else:
            // $id is integer
            $result = $this->equipment_model->get_item($id);
            if( is_array($result) && !empty($result) ):
                $code = 0;
                $item = $result;
            elseif(empty($result)):
                $code = 11;
                $str = 'Не найдено ни одного элемента с таким ID.';
            else:
                $error = $this->db->error();
                $code = $error->code;
                $str = $error->message;
            endif;
        endif;

        $item['lang'] = $lang;

        $this->load->view('include/header', $item);
        if( $code != 0 ):
            echo '<h2>' . $str . '</h2>';
        else:
            //echo '<pre>'.print_r($item,true).'</pre>';
            $this->load->view('equipment/show');
        endif;
        $this->load->view('include/footer');

    }

    /**
     * Админка
     * Авторизация, при успешной авторизации выводит таблицу с оборудованием
     */
    public function adm()
    {
        $eq_list = '';

        if( $this->is_logged_in() ):
            $lang_file = 'russian';
            $this->load->helper('language');
            $this->lang->load('show', $lang_file);

            $res = $this->get_list();
            /*echo '<pre>' . print_r($res,true) . '</pre>';
*/
            $res['code'] != 0 || $eq_list = $res['message'];
            //echo $eq_list;
            //exit();

            $data = array(
                'eq_list' => $eq_list,
                'lang' => 'ru',
                'header' => array('ru' => 'ru'),
                'equipment' => array()
            );

            $this->load->view('include/header', $data);
            $this->load->view('equipment/adm');
            $this->load->view('include/footer');
        else:
            header('Location: ' . base_url('/'));
            exit();
        endif;
    }

    /**
     * Обновляем список для отображения
     */
    public function list_refresh()
    {
        echo json_encode($this->get_list());
    }

    /**
     * Формируем список строк таблицы каталога оборудования
     * @return string
     */
    public function get_list()
    {
        $str = '';
        $code = 0;

        if( $this->is_logged_in() ):
            $list = $this->equipment_model->get_items();
            foreach( $list as $item ):
                $str .= '<tr id="tr' . $item->id . '"><td>' . $item->id . '</td><td><a href="#" class="edit_record" data-id="' . $item->id . '">' . $item->name_ru . '</a></td><td><span class="glyphicon glyphicon-pencil" data-id="' . $item->id . '" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Редактировать"></span><span class="glyphicon glyphicon-trash" data-id="' . $item->id . '" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Удалить" ></span></td></tr>';
            endforeach;
        else:
            if( !$this->input->is_ajax_request() ):
                header('Location: ' . base_url('/'));
                exit();
            else:
                $str = 'Время сессии истекло, необходима повторная <a href="' . base_url('/') . '">авторизация</a>';
                $code = 12;
            endif;
        endif;

        return array( 'code' => $code, 'message' => $str );
    }
}
