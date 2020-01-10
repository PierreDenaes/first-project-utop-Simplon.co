<?php

ini_set('display_errors', 'on');
session_start();
if (isset ($_POST['submit'])){
    //Vérification du nom dans la base de donnée avec sécurisation injection type mysql
                $name = stripslashes(htmlentities(htmlspecialchars($_POST['name'])));
                $email = stripslashes(htmlentities(htmlspecialchars($_POST['email'])));
                $phone = stripslashes(htmlentities(htmlspecialchars($_POST['phone'])));
                $message = stripslashes(htmlentities(htmlspecialchars($_POST['message'])));
                //Insertion du nom dans la base de donnée
                    require "db.php";
                    $sth = $dbh->prepare("INSERT INTO user (name, email, phone, message) VALUES(?, ?, ?, ?)");
                    $sth->bindParam('name', $name, PDO::PARAM_STR);
                    $sth->execute(array($name, $email, $phone, $message));
                //Envoi du mail sur ma boite
                     ob_start();
                     require "mail.php";
                     $mail->setFrom($_POST['email']);
                     $mail->addAddress('photostudio13000@gmail.com');

                     $mail->isHTML(true);
                     $mail->Subject = 'Vous avez un nouveau contact';
                     $mail->Body = "<div>$name</div>
                                     <div>$email</div>
                                     <div>$phone</div>
                                     <div>$message</div>";
                     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                     ob_clean();
                     $mail->send($_SESSION['flash']['success'] = 'Votre email a bien été envoyé',
                    header('Location: ../index.php'));
                    exit();
            }