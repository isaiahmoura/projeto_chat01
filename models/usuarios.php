<?php

class usuarios extends model {

    public function logado() {
        if(isset($_SESSION['chat']) && !empty($_SESSION['chat'])) {
            header("Location: ".BASE_URL."home");
        }
    }
    public function não_logado() {
        if(!isset($_SESSION['chat']) && empty($_SESSION['chat'])) {
            header("Location: ".BASE_URL."login");
        }
    }

    public function get_user_data($uid) {
        $array = array();

        $sql = "SELECT id,nome,email FROM usuarios WHERE id = '$uid'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function login($email,$senha) {

        $sql = "SELECT email FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {

            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0 ) {
                $data = $sql->fetch();
                $_SESSION['chat'] = $data['id'];
            }else {
                $_SESSION['erro_box'] = 'Senha incorreta..';
            }

        }else {
            $_SESSION['erro_box'] = 'E-mail não está cadastrado..';
        }
    }
}