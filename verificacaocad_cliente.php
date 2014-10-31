<?php
                                if(isset($_POST['cadastrar'])){
                                    $nome = $_POST['nome'];
                                    $cpf = $_POST['cpf'];
                                    $cpf2 = $_POST['cpf2'];
                                    $email = $_POST['email'];
                                    $senha = $_POST['senha'];

                                    if(empty($nome)){
                                        $erro = 'Preencha o campo Nome'
                                    }else if(empty($cpf) || empty($cpf2)){
                                        $erro = 'Preencha o campo CPF'
                                    }else if(empty($cpf) || empty($cpf2)){
                                        $erro = 'Preencha o campo CPF'
                                    }else if(empty($email)){
                                        $erro = 'Preencha o campo E-mail'
                                    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                        $erro = 'Digite um e-mail válido'
                                    }else{

                                    }

                                    if(isset($erro)):
                                        echo $erro.<br>;
                                    endif;
                                }
                            ?>