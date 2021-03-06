<!DOCTYPE>
<html>
<head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='public/css/main.css'>
        <title>ThingToDo</title>
</head>
<body>
        <?php require_once('app/utils/header.php'); ?>
        <?php require_once('app/utils/modals.php'); ?>
        <div class='container mt-2 text-center'>
                <div class='row'>
                        <aside class='col-4 p-2 border-right border-secondary'>
                                <h2 class='d-flex flex-row justify-content-around'>
                                        My List`s
                                        <button type='button' class='btn btn-info rounded-circle border-0' data-toggle='modal' data-target='#create_list'>
                                                <span class='text-uppercase font-weight-bold'>+</span>
                                        </button>
                                </h2>
                                <?php if($message == ''){}else{ ?>
                                        <?php if($message != 'Lista creada de forma satisfactoria'){ ?>
                                                <div class='alert alert-danger text-center m-2'>
                                                        Hubo un error al crear su lista
                                                </div>
                                        <?php }else if($message != 'Lista actualizada de forma satisfactoria'){ ?>
                                                <div class='alert alert-danger text-center m-2'>
                                                        Hubo un error al actualizar su lista
                                                </div>
                                        <?php }else if($message != 'Lista eliminada de forma satisfactoria'){ ?>
                                                <div class='alert alert-danger text-center m-2'>
                                                        Hubo un error al borrar su lista
                                                </div>
                                        <?php } ?>
                                <?php } ?>
                                <ul class='list-group mt-4 mr-4'>
                                        <?php if($user_id == ''){ ?>
                                                <p class='text-monospace'>Debes loguearte para ver tus listas<p>
                                        <?php }else{ ?>
                                                <?php if($all_list == null || $all_list == '' || $all_list == 0){ ?>
                                                        <p class='text-monospace'>No has creado ninguna lista</p>
                                                <?php }else{ ?>
                                                        <?php foreach($all_list as $list_item){ ?>
                                                                <li class="list-group-item">
                                                                        <span class='text-monospace list_name'><?php echo $list_item['list_name'] ?></span>
                                                                        <button type='button' class='btn btn-outline-success btn-sm contents' value='<?php echo $list_item['id'] ?>'>select</button>
                                                                        <button type='button' class='btn btn-outline-warning btn-sm' data-toggle='modal' data-target='#update_list' value='<?php echo $list_item['id'] ?>'>update</button>
                                                                        <a href="index.php?controller=list&action=delete&list_id=<?php echo $list_item['id'] ?>" class='btn btn-outline-danger btn-sm'>delete</a>
                                                                </li>
                                                        <?php } ?>
                                                <?php } ?>
                                        <?php } ?>
                                </ul>
                        </aside>
                        <main class='col-8 p-2'>
                                <h2 class='d-flex flex-row justify-content-around'>
                                        List: <span class="text-monospace" id="list_name"></span>
                                        <button type='button' class='btn btn-info rounded-circle border-0' disabled data-toggle='modal' data-target='#create_task'>
                                                <span class='text-uppercase font-weight-bold'>+</span>
                                        </button>
                                </h2>
                                <ul class='list-group'>
                                        <?php if($user_id == ''){ ?>
                                                
                                        <?php }else{ ?>
                                                <?php if($all_task == ''){ ?>
                                                        <p class='text-monospace'>Selecciona una lista</p>
                                                <?php }?>
                                        <?php } ?>
                                </ul>
                        </main>
                </div>
        </div>
        <?php require_once('app/utils/footer.php'); ?>
        <script src='tools/jquery/jquery.min.js'></script>
        <script src='tools/popper/popper.min.js'></script>
        <script src='tools/bootstrap/dist/js/bootstrap.min.js'></script>
        <script src='app/js/functions/get_id_list.js'></script>
        <script src="app/js/functions/tasks.js"></script>
</body>
</html>
