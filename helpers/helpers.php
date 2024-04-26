<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// Muestra informacion formateada
function dep($data)
{
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}

//Elimina exceso de espacios entre palabras
function strClean($strCadena)
{
  $string = preg_replace(['/\s+/', '/^\s|\s$/'], [' ', ''], $strCadena);
  $string = trim($string); //Elimina espacios en blanco al inicio y al final
  $string = stripslashes($string); // Elimina las \ invertidas
  $string = str_ireplace("<script>", "", $string);
  $string = str_ireplace("</script>", "", $string);
  $string = str_ireplace("<script src>", "", $string);
  $string = str_ireplace("<script type=>", "", $string);
  $string = str_ireplace("SELECT * FROM", "", $string);
  $string = str_ireplace("DELETE FROM", "", $string);
  $string = str_ireplace("INSERT INTO", "", $string);
  $string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
  $string = str_ireplace("DROP TABLE", "", $string);
  $string = str_ireplace("OR '1'='1", "", $string);
  $string = str_ireplace('OR "1"="1"', "", $string);
  $string = str_ireplace('OR ´1´=´1´', "", $string);
  $string = str_ireplace("is NULL; --", "", $string);
  $string = str_ireplace("is NULL; --", "", $string);
  $string = str_ireplace("LIKE '", "", $string);
  $string = str_ireplace('LIKE "', "", $string);
  $string = str_ireplace("LIKE ´", "", $string);
  $string = str_ireplace("OR 'a'='a", "", $string);
  $string = str_ireplace('OR "a"="a', "", $string);
  $string = str_ireplace("OR ´a´=´a", "", $string);
  $string = str_ireplace("OR ´a´=´a", "", $string);
  $string = str_ireplace("--", "", $string);
  $string = str_ireplace("^", "", $string);
  $string = str_ireplace("[", "", $string);
  $string = str_ireplace("]", "", $string);
  $string = str_ireplace("==", "", $string);
  return $string;
}

function validateFields($data, ...$fields)
{
  foreach ($fields as $field) {
    if (!isset($data[$field]) || empty($data[$field])) {
      return badRequestResponse("field $field is required");
    }
  }
}
function validateStatus($status)
{
  if ($status != 1 && $status != 2) {
    return badRequestResponse("field status must be 1 or 2: $status");
  }
}
function validateId($id)
{
  if (!isset($id) || empty($id)) {
    return badRequestResponse("id is required");
  }
  validateInteger($id, "id");
}
function validateInteger($value, $fieldName)
{
  if (!is_numeric($value)) {
    badRequestResponse("field $fieldName must be numeric");
  }
  if ($value < 1) {
    badRequestResponse("$fieldName must be greater then 0");
  }
}

function validateToken($token)
{
  if (!isset($token) || empty($token)) {
    badRequestResponse("token is required");
  }
}


function jsonResponse(array $data, int $code = 200)
{
  header("HTTP/1.1 " . $code);
  header("Content-Type: application/json");
  return $data;
}

function okResponse(string $message)
{
  $data = [
    "success" => true,
    "message" => $message,
    "redirectUrl" => $_SERVER['HTTP_REFERER']
  ];
  return jsonResponse($data, 200);
}
function createdResponse(string $message)
{
  $data = [
    "success" => true,
    "message" => $message
  ];
  return jsonResponse($data, 201);
}

function badRequestResponse(string $message)
{
  $data = [
    "success" => false,
    "message" => $message
  ];
  return jsonResponse($data, 400);
}
function paramsErrorResponse(string $message)
{
  $data = [
    "success" => false,
    "message" => "Params error: " . $message,
  ];
  return jsonResponse($data, 400);
}

function internalServerErrorResponse(string $message, string $error)
{
  $data = [
    "success" => false,
    "message" => $message,
    "error" => $error
  ];
  return jsonResponse($data, 500);
}

function methodNotAllowedResponse(string $method)
{
  $data = [
    "success" => false,
    "message" => "Error en la solicitud $method"
  ];
  return jsonResponse($data, 405);
}

function notFoundResponse($message = null)
{
  $data = [
    "success" => false,
    "message" => $message ?? "Recurso no encontrado"
  ];
  return jsonResponse($data, 404);
}

//Envio de correos
function sendEmail($data, $template)
{
  $subject = $data['subject'];
  $toEmail = $data['email'];
  $empresa = "Remitenten";
  $remitente = "Correo remitente";
  //ENVIO DE CORREO
  $de = "MIME-Version: 1.0\r\n";
  $de .= "Content-type: text/html; charset=UTF-8\r\n";
  $de .= "From: {$empresa} <{$remitente}>\r\n";
  ob_start();
  require_once("../views/email/" . $template . ".php");
  $mensaje = ob_get_clean();
  $send = mail($toEmail, $subject, $mensaje, $de);
  return $send;
}

function redirect($url)
{
  header("Location: $url");
  exit;
}

// class EmailSender
// {
//   private static $instance;
//   private $mailer;

//   public function __construct()
//   {
//     $this->mailer = new PHPMailer(true);
//     $this->mailer->SMTPDebug = SMTP::DEBUG_OFF;
//     $this->mailer->isSMTP();
//     $this->mailer->Host = 'smtp.gmail.com';
//     $this->mailer->SMTPAuth = true;
//     $this->mailer->Username = $_ENV['MAILER_USERNAME'];
//     $this->mailer->Password = $_ENV['MAILER_PASS'];
//     $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//     $this->mailer->Port = 465;
//     $this->mailer->setFrom($_ENV['MAILER_USERNAME']);
//   }

//   public static function getInstance()
//   {
//     if (self::$instance === null) {
//       self::$instance = new self();
//     }
//     return self::$instance;
//   }

//   public function sendEmail($to, $subject, $body)
//   {
//     try {
//       $this->mailer->addAddress($to);
//       $this->mailer->isHTML(true);
//       $this->mailer->Subject = mb_encode_mimeheader($subject, "UTF-8");
//       $this->mailer->Body = $body;

//       return $this->mailer->send();
//     } catch (Exception $e) {
//       internalServerErrorResponse("Error al enviar el correo", $e->getMessage());
//     }
//   }
// }
