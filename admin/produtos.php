<?php require "menu.php"; ?>




        <?php  require_once "db.php";

        $sql = "SELECT * FROM produto";
        $result = $PDO->query( $sql );
        $rows = $result->fetchAll();


      ?>



        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Produtos</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Marca</th>
                        <th>Garantia</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Stock</th>
                        <th>Img</th>
                        <th>Categoria</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?  foreach($rows as $row){
                        /*
                          $subquery = "SELECT * FROM categoria WHERE ID=".$row['categoria_id'];
                          $subresult = $PDO->query($subquery);
                          $resultsub = $subresult->fetch();

                          /*$subquery2 = "SELECT * FROM marca WHERE ID=".$row['marca_id'];
                          $subresult2 = $PDO->query($subquery2);
                          $resultsub2 = $subresult2->fetch();
                            */?>
                      <tr>
                        <td><?=$row['id'];?></td>
                        <td><?=$row['nome'];?></td>
                      <!--  <td></*?=$resultsub2['nome'];?></td> -->
                        <td><?=$row['garantia'];?></td>
                        <td><?=$row['descricao'];?></td>
                        <td><?=$row['preco'];?></td>
                        <td><?=$row['quantidadeStock'];?></td>
                        <td><img src="../images/produtos/<?=$row['img1'];?>" height="50" width="50"></td>
                        <!--<td></*?=$resultsub['nome'];?></td> -->


                        <td><a href="produtosUpd.php?id=<?echo $row['id'];?>"><span class="ti-settings"> </span></a></td>
                        <td><a href="produtosDel.php?id=<?echo $row['id'];?>"><span class="ti-trash"> </span></a></td>
                      </tr>
                    <?}?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



        <div class="col-lg-12">
        <form action="produtosAdd.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="card">
                      <div class="card-header">
                        <strong>Adicionar Produtos</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="produtosAdd.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nome" placeholder="Digite o seu Nome" class="form-control" required></div>
                          </div>

                            <!--   <div class="row form-group">
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

                                <option value="<?=$row2['id'];?>"><?=$row2['nome'];?></option>

                              <?php } */?>

                            </select>
                            </div>
                          </div>
                        -->

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Garantia</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email-input" name="garantia" placeholder="Digite a garantia do produto" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Descrição</label></div>
                            <div class="col-12 col-md-9"><textarea rows="4" cols="50" id="email-input" name="descricao" placeholder="Digite a descrição do produto" class="form-control" required></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Preço</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="preco"  class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Stock</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="stock"  class="form-control" required></div>
                          </div>

                        <!--  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Categoria</label></div>
                           <div class="col-12 col-md-9">
                            <select name="categoria">

                              <?php
                            /*  $sql3 = "SELECT * FROM categoria";
                              $result3 = $PDO->query( $sql3 );
                              $rows3 = $result3->fetchAll();
                              foreach($rows3 as $row3){
                              ?>

                                <option value="<?=$row3['id'];?>"><?=$row3['nome'];?></option>

                              <?php } */?>

                            </select>
                            </div>
                            </div>
                          -->
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Imagem do produto</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="password-input" name="file3"  class="form-control"></div>
                          </div>

                          <div class="row form-group">
                          <div class="col col-md-1">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Enviar</button>
                            </div>
                        </div>

                        </form>

     </div>




      <!-- Right Panel -->





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
