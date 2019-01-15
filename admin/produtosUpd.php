<?php require "menu.php"; ?>


        <?php  require_once "db.php";

        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM produto where id = $id";
        $result = $PDO->query( $sql );
        $row = $result->fetch();

        $nome = $row['nome'];
        /*$marca = $row['marca_id'];*/
        $garantia = $row['garantia'];
        $descricao = $row['descricao'];
        $preco = $row['preco'];
        $stock = $row['quantidadeStock'];
      /*  $categoria = $row['categoria_id'];*/
        $file2 = $row['img1'];

      ?>


      <div class="col-lg-12">
        <form action="produtosUpd2.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="card">
                      <div class="card-header">
                        <strong>Adicionar Produtos</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="funcionariosAdd.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nome" value="<?=$nome?>"  class="form-control"></div>
                          </div>

                        <!--  <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Marca</label></div>
                          <div class="col-12 col-md-9">
                            <select name="marca">

                              <?php
                              /*
                              $sql2 = "SELECT * FROM marca";
                              $result2 = $PDO->query( $sql2 );
                              $rows2 = $result2->fetchAll();
                              foreach($rows2 as $row2){
                              ?>

                                <option <?php if($marca == '1'){echo 'selected';}else if($select2 == '2'){echo '';}?> value="<?=$row2['id'];?>"><?=$row2['nome'];?></option>

                              <?php } */?>

                            </select>
                            </div>
                          </div>
                          -->
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Garantia</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email-input" name="garantia" value="<?=$garantia?>" placeholder="ano/s" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Descrição</label></div>
                            <div class="col-12 col-md-9"><textarea rows="4" cols="50" id="email-input" name="descricao"  placeholder="Digite a descrição do produto" class="form-control"><?=$descricao?></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Preço</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="preco" value="<?=$preco?>"  class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Stock</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="stock"  value="<?=$stock?>" class="form-control"></div>
                          </div>
                        <!--  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Categoria</label></div>
                           <div class="col-12 col-md-9">
                            <select name="categoria">

                              <?php
                              /*
                              $sql3 = "SELECT * FROM categoria";
                              $result3 = $PDO->query( $sql3 );
                              $rows3 = $result3->fetchAll();
                              foreach($rows3 as $row3){
                              ?>

                                <option <?php if($marca == '1'){echo 'selected';}else if($select2 == '2'){echo '';}?> value="<?=$row3['id'];?>"><?=$row3['nome'];?></option>

                              <?php } */?>

                            </select>
                            </div>
                            </div>
                          -->
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Imagem do produto</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="password-input" name="file2"  class="form-control"></div>
                          </div>

                          <div class="row form-group">
                          <div class="col col-md-1">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Enviar</button>
                            </div>
                        </div>

                        </form>

     </div>





      <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>


      <script src="assets/js/lib/data-table/datatables.min.js"></script>
      <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
      <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
      <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
      <script src="assets/js/lib/data-table/jszip.min.js"></script>
      <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
      <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
      <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
      <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
      <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
      <script src="assets/js/lib/data-table/datatables-init.js"></script>


      <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
      </script>


</body>
</html>
