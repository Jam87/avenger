<?php
#Mando a llamar al modal
getModal('contacto', $data);
?>

<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <title><?= $data['page_title']; ?></title>
    <?php MainHead($data); ?>
</head>

<body>

    <div id="layout-wrapper">

        <!-- ==== Main Headerr ====== -->
        <?php MainHeader($data); ?>

        <!-- ========== App Menu ========== -->
        <?php MainMenu($data); ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0"><?= $data['page_name']; ?></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><?= $data['page_title']; ?></a></li>
                                        <li class="breadcrumb-item active">Categoria</li>
                                    </ol>
                                </div>

                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <!-- Button agregar nuevo registro -->
                                    <!--openModal() = Manda a llamar al modal-->
                                    <button type="button" id="btnnuevo" class="btn btn-primary btn-label waves-effect waves-light rounded-pill" onclick="openModal();"><i class="ri-user-smile-line label-icon align-middle rounded-pill fs-16 me-2"></i> Nuevo Registro</button>
                                </div>
                                <div class="card-body">
                                    <!-- Tabla de Tipo de usuario -->
                                    <!--<table id="table-contacto" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Descripción</th>
                                                <th>Teléfono</th>
                                                <th>Correo</th>
                                                <th>Url</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>-->



                                    <div class="container">
                                        <h1 class="title has-text-centered">Input Dinámico</h1>
                                        <div id="jsonDiv">

                                        </div>
                                        <form action="" id="frmUsers">

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="formulario__grupo" id="grupo__apellido">
                                                            <label for="nombre">Contacto <span class="text-danger">*</span></label>
                                                            <!--<select class="form-select mb-3" id="comboxContacto" name="comboxContacto">

                                                            </select>-->
                                                            <select class="form-select mb-3" id="comboxContact" name="comboxContact">
                                                                <option> --- seleccione ---</option>
                                                                <option value="Celular-claro"> Celular claro</option>
                                                                <option value="Celular tigo">Celular tigo</option>
                                                                <option value="Correo de trabajo">Correo de trabajo</option>
                                                                <option value="Correo personal">Correo personal</option>
                                                                <option value="Dirección de casa">Dirección de casa</option>
                                                                <option value="Dirección de trabajo">Dirección de trabajo</option>
                                                                <option value="Dirección de segundo trabajo">Dirección de segundo trabajo</option>
                                                                <option value="Teléfono de casa">Teléfono de casa</option>
                                                                <option value="Teléfono de trabajo">Teléfono de trabajo</option>
                                                            </select>
                                                        </div><!-- Fin: password-->
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="formulario__grupo" id="grupo__nombre">
                                                            <label for="nombre">Descripción <span class="text-danger">*</span></label>

                                                            <div class="formulario__grupo-input">
                                                                <input type="text" class="form-border" name="Descripcion" id="nombre" placeholder="Teléfono, Correo, Dirección" autocomplete="off" required>
                                                            </div>

                                                        </div><!-- Fin: nombre -->
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="formulario__grupo" id="grupo__apellido">
                                                            <label for="nombre">Extensión <span class="text-danger">*</span></label>

                                                            <div class="formulario__grupo-input">
                                                                <input type="text" class="form-border" name="Extension" id="apellido" placeholder="Número de extensión" autocomplete="off" required>
                                                            </div>
                                                        </div><!-- Fin: apellido -->
                                                    </div>
                                                </div>

                                                
                                            </div><!-- Fin: grupo1 -->
                                            <div class="control">
                                                <button id="btnAdd" type="button" class="button is-danger">
                                                    <span class="icon">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="control">
                                                <button id="btnSave" type="button" class="button is-info">
                                                    Save
                                                </button>
                                            </div>

                                        </form>
                                        <hr>
                                        <!--Div donde se pone el resultado-->
                                        <div id="divElements">

                                        </div>

                                        <!--<div class="content2">
                                            <div id="Celular-claro" class="data">
                                            <div class="col-sm-4">
                                                        <div class="formulario__grupo" id="grupo__nombre">
                                                            <label for="nombre">Nombre <span class="text-danger">*</span></label>

                                                            <div class="formulario__grupo-input">
                                                                <input type="text" class="form-border" name="name" id="nombre" placeholder="EJ. Juan" autocomplete="off" required>
                                                            </div>

                                                        </div><!-- Fin: nombre --
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="formulario__grupo" id="grupo__apellido">
                                                            <label for="nombre">Apellido <span class="text-danger">*</span></label>

                                                            <div class="formulario__grupo-input">
                                                                <input type="text" class="form-border" name="lastName" id="apellido" placeholder="EJ. Martinez" autocomplete="off" required>
                                                            </div>
                                                        </div><!-- Fin: apellido --
                                                    </div>
                                            </div>
                                            <div id="Celular tigo" class="data">
                                                <p>Esta es anita</p>
                                            </div>

                                            <div id="Correo de trabajo" class="data">
                                                <p>Esta es nia</p>
                                            </div>
                                            <div id="Correo personal" class="data">
                                                <p>Esta es anita</p>
                                            </div>

                                            <div id="Dirección de casa" class="data">
                                                <p>Esta es nia</p>
                                            </div>
                                            <div id="Dirección de trabajo" class="data">
                                                <p>Esta es anita</p>
                                            </div>

                                            <div id="Dirección de segundo trabajo" class="data">
                                                <p>Esta es nia</p>
                                            </div>
                                            <div id="Teléfono de casa" class="data">
                                                <p>Esta es anita</p>
                                            </div>

                                            <div id="Teléfono de trabajo" class="data">
                                                <p>Esta es anita</p>
                                            </div>

                                        </div>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <!-- FOOTER -->
                <?php MainFooter($data); ?>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--<script>
            $(document).ready(function() {

                $("#comboxContact").on('change', function() {
                    $(".data").hide();
                    $("#" + $(this).val()).fadeIn(700);
                }).change();
            })
        </script>-->

        <!-- JAVASCRIPT -->
        <?php MainJs($data); ?>
</body>

</html>