<?php

class sesionController extends AppController {

    function before_filter() {
        if (!Auth::is_valid()) {
            Router::redirect('index?error=2');
        }
    }

    public function index($titulo = NULL, $titu = NULL) {
        if (Input::hasPost("usuario", "contra")) {
            $rojo = Input::post('usuario');
            $vamos = Input::post('contra');
            if ($rojo == '' || $vamos == '') {
                header('Location:index?error=2');
            } else {
                $auth = new Auth("model", "class: gestorpredial", "cedulagestor: $rojo", "clave: $vamos");
                if ($auth->authenticate()) {
                    Session::set('cedulagestor', $rojo);
                    Session::set('clave', $vamos);
                    $daniela = Auth::get('rol');
                    if ($daniela == '1') {
                        $rols = 'Administrador';
                    } else {
                        $rols = 'Gestor predial';
                    }
                    Router::redirect('sesion/inicio');
                } else {
                    header('Location:index?error=1');
                }
                Session::set('rol', $rols);
                $this->titulo = Session::get('cedulagestor');
                $this->titu = Session::get('rol');
            }
        }
    }

    public function inicio($titulo = NULL, $titu = NULL) {
        View::template('sbadmin');
        $this->a = 'active';
        $this->b = '';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
    }

    public function perfil($titulo = NULL, $titu = NULL) {
        View::template('sbadmin');
        $this->a = '';
        $this->b = '';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        if (Input::hasPost("nombre", "Cedula", "Telefono", "Email")) {
            $nombre = Input::post('nombre');
            $cedula = Input::post('Cedula');
            $telefono = Input::post('Telefono');
            $email = Input::post('Email');
            Load::model('persona');
            $pp = new persona();
            $pp->actualizar($nombre, $telefono, $email, $cedula);
            if ($pp == TRUE) {
                Router::redirect('sesion/perfil?error=1');
            } else {
                Router::redirect('sesion/perfil?error=2');
            }
        }
    }

    public function ficha($titulo = NULL, $titu = NULL) {
        View::template('sbadmin');
        $this->a = '';
        $this->b = 'active';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        Load::model('persona');
        Load::model('notaria');
        Load::model('escritura');
        Load::model('fichapredial');
        Load::model('registro');
        Load::model('tradicion');
        Load::model('propietario');
        $fch = new fichapredial();
        $reg = new registro();
        $tra = new tradicion();
        $pp = new persona();
        $nn = new notaria();
        $ee = new escritura();
        $prop = new propietario();
        if (isset($_POST['one'])) {
            $ficha = Input::post('ficha');
            $uf = Input::post('uf');
            $Cedulacatastral = Input::post('Cedulacatastral');
            $Matricula = Input::post('Matricula');
            $noo = $fch->count("idficha='$ficha'");
            if ($noo > 0) {
                Router::redirect('sesion/ficha?error=1');
            } else {
                session::set('cat', $Cedulacatastral);
                session::set('mat', $Matricula);
                session::set('fic', $ficha);
                Router::redirect('sesion/ficha?error=2');
            }
        }
        if (isset($_POST['two'])) {
            $nombre = Input::post('nombre');
            $Cedula = Input::post('Cedula');
            $Telefono = Input::post('Telefono');
            $Email = Input::post('Email');
            $escritura = Input::post('escritura');
            $notaria = Input::post('notaria');
            $note = $nn->count();
            $dd = $note + 1;
            $d = 0;
            $a = (1000 + $escritura);
            $pp->registro($Cedula, $nombre, $Telefono, $Email);
            $nn->registro($dd, $notaria);
            $ee->registro($a, $dd, $escritura, $d);
            $prop->registro($Cedula);
            if ($pp == true && $nn == true && $ee == true && $prop == true) {
                session::set('ced', $Cedula);
                session::set('not', $dd);
                session::set('esc', $a);
                Router::redirect('sesion/ficha?error=3');
            } else {
                Router::redirect('sesion/ficha?error=4');
            }
        }
        if (isset($_POST['primero'])) {
            $Sector = Input::post('Sector');
            $Municipio = Input::post('Municipio');
            $Vereda = Input::post('Vereda');
            $Direccion = Input::post('Direccion');
            $suelo = Input::post('suelo');
            $economica = Input::post('economica');
            $Topografia = Input::post('Topografia');
            $tra->registro(session::get('mat'), session::get('esc'), $Direccion);
            $reg->re(session::get('cat'), $Vereda, $suelo, $economica, session::get('ced'), session::get('mat'));
            $fch->registro(session::get('fic'), session::get('cat'), Session::get('cedulagestor'));
            if ($tra == true && $reg == true && $fch == true) {
                Router::redirect('sesion/ficha?error=6');
            } else {
                Router::redirect('sesion/ficha?error=5');
            }
        }
    }

    public function sabana($titulo = FALSE, $titu = FALSE) {
        View::template('sbadmin');
        $propietario = Load::model('propietario');
        $this->inner = $propietario->primera();
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        $this->a = '';
        $this->b = '';
        $this->c = 'active';
        if (isset($_POST['del'])) {
            $delo = Input::post('delo');
            load::model('fichapredial');
            $fic = new fichapredial();
            $fic->borra($delo);
            if ($fic == true) {
                Router::redirect('sesion/sabana?error=2');
            } else {
                Router::redirect('sesion/sabana?error=1');
            }
        }
    }

    public function pexcel($titulo = NULL, $titu = NULL) {
        View::template('sbadmin');
        $this->a = 'active';
        $this->b = '';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        $propietario = Load::model('propietario');
        $this->resultado = $propietario->primera();
    }

    public function registro($titulo = NULL, $titu = NULL) {
        View::template('sbadmin');
        $this->a = '';
        $this->b = 'active';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        $a = Input::post('udelo');
        Load::model('persona');
        Load::model('notaria');
        Load::model('escritura');
        Load::model('fichapredial');
        Load::model('registro');
        Load::model('tradicion');
        Load::model('propietario');
        $fch = new fichapredial();
        $reg = new registro();
        $tra = new tradicion();
        $pp = new persona();
        $nn = new notaria();
        $ee = new escritura();
        $prop = new propietario();
        $dss = $fch->consulta($a);
        session::set('jyd', $dss);
        if (isset($_POST['one'])) {
            $ficha = Input::post('ficha');
            $uf = Input::post('uf');
            $Cedulacatastral = Input::post('Cedulacatastral');
            $Matricula = Input::post('Matricula');
            $noo = $fch->count("idficha='$ficha'");
            if ($noo > 0) {
                Router::redirect('sesion/ficha?error=1');
            } else {
                session::set('cat', $Cedulacatastral);
                session::set('mat', $Matricula);
                session::set('fic', $ficha);
                Router::redirect('sesion/ficha?error=2');
            }
        }
        if (isset($_POST['two'])) {
            $nombre = Input::post('nombre');
            $Cedula = Input::post('Cedula');
            $Telefono = Input::post('Telefono');
            $Email = Input::post('Email');
            $escritura = Input::post('escritura');
            $notaria = Input::post('notaria');
            $note = $nn->count();
            $dd = $note + 1;
            $d = 0;
            $a = (1000 + $escritura);
            $pp->registro($Cedula, $nombre, $Telefono, $Email);
            $nn->registro($dd, $notaria);
            $ee->registro($a, $dd, $escritura, $d);
            $prop->registro($Cedula);
            if ($pp == true && $nn == true && $ee == true && $prop == true) {
                session::set('ced', $Cedula);
                session::set('not', $dd);
                session::set('esc', $a);
                Router::redirect('sesion/ficha?error=3');
            } else {
                Router::redirect('sesion/ficha?error=4');
            }
        }
        if (isset($_POST['primero'])) {
            $Sector = Input::post('Sector');
            $Municipio = Input::post('Municipio');
            $Vereda = Input::post('Vereda');
            $Direccion = Input::post('Direccion');
            $suelo = Input::post('suelo');
            $economica = Input::post('economica');
            $Topografia = Input::post('Topografia');
            $tra->registro(session::get('mat'), session::get('esc'), $Direccion);
            $reg->re(session::get('cat'), $Vereda, $suelo, $economica, session::get('ced'), session::get('mat'));
            $fch->registro(session::get('fic'), session::get('cat'), Session::get('cedulagestor'));
            if ($tra == true && $reg == true && $fch == true) {
                Router::redirect('sesion/ficha?error=6');
            } else {
                Router::redirect('sesion/ficha?error=5');
            }
        }
    }

    public function reporteficha($titulo = NULL, $titu = NULL) {
        View::template('sbadmin');
        $this->a = 'active';
        $this->b = '';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        $dd = input::post('chafi');
        session::set('dani', $dd);
    }

    public function cargadedatos($titulo = NULL, $titu = NULL) {
        View::template('sbadmin');
        $this->a = 'active';
        $this->b = '';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        if (Input::hasPost('archivo')) {
            $destino = Input::post('archivo');
            Load::lib('excel/PHPExcel/Reader/Excel2007');
            $d = new PHPExcel_Reader_Excel2007();
            $da = $d->load($destino);
            $da->setActiveSheetIndex(0);
            for ($i = 2; $i <= 65535; $i++) {
                $mecha[] = array(
                    'cedula' => $da->getActiveSheet()->getCell('A' . $i)->getValue(),
                    'nombre' => $da->getActiveSheet()->getCell('B' . $i)->getValue(),
                    'telefono' => $da->getActiveSheet()->getCell('C' . $i)->getValue(),
                    'email' => $da->getActiveSheet()->getCell('D' . $i)->getValue(),
                );
                $c = $i + 1;
                if ($da->getActiveSheet(0)->getCell('A' . $c) == "") {
                    $i = 65535;
                }
            }
            Session::set('array_usuarios', $mecha);
            Router::redirect('sesion/cargadedatos');
        }
        if (isset($_POST['subir'])) {
            $rojo = session::get('array_usuarios');
            Load::model('persona');
            Load::model('gestorpredial');
            $persona = new persona();
            $gestor = new Gestorpredial();
            $d = 0;
            for ($i = 0; $i < count($rojo); $i++) {
                $cedula = $rojo[$i]['cedula'];
                $nombre = $rojo[$i]['nombre'];
                $telefono = $rojo[$i]['telefono'];
                $email = $rojo[$i]['email'];
                $ee = $persona->count("cedula = '$cedula'");
                if ($ee == 1) {
                    $d = 1;
                } else {
                    $persona->create($cedula, $nombre, $telefono, $email);
                    $gestor->create($cedula);
                }
            }
//            Router::redirect('sesion/cargadedatos?error=3');
        }
//             else {
//             Router::redirect('sesion/cargadedatos?error=1'); 
//       }
//        }
    }

    public function correo() {
        View::template('sbadmin');
        $this->a = 'active';
        $this->b = '';
        $this->c = '';
        $this->titulo = Session::get('cedulagestor');
        $this->titu = Session::get('rol');
        if (Input::hasPost('Email', 'nombre')) {
            Load::model('persona');
            $gestores = new persona();
            $yyt = $gestores->cor();
            Load::lib('PHPMailerAutoload');
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer = 'smtp';
            $mail->SMTPAuth = true; // enable SMTP authentication
            $mail->SMTPDebug = 0;
            $mail->SMTPSecure = 'tls'; // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->FromName = "DATAPREDIAL";
            $mail->Username = Input::post('Email');
            $mail->Password = Input::post('nombre');
            $mail->Subject = 'Prueba';
             $p = 0;
            foreach ($yyt as $vol) {
                $meca[$p] = array(
                   'nombre' => $vol->a,
                   'correo' => $vol->b,
              );
                $mail->Body = 'Cordial saludo: Se le informa que la empresa va a empezar a funcionar.';
                    $mail->addAddress($meca[$p]['correo']);     
            $p =$p+1;}
                    if (!$mail->send()) {
                    $mecha = $mail->ErrorInfo;
                    Router::redirect('sesion/correo?error=2');
                    session::set('rojo', $mecha);
}  else {
 Router::redirect('sesion/correo?error=1');   
}
                    }}}
