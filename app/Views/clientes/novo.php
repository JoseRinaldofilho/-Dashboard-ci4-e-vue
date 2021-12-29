  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Novo Cliente</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Starter Page</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <!-- ********* INICIO -->
                  <div class="col-lg-12">
                      <!-- general form elements -->
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">Dados do Cliente</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label>Nome</label>
                                              <input type="text" name='cliente' class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-lg-3">
                                          <div class="form-group">
                                              <label>Data de Nascimento</label>
                                              <input type="date" name='data_de_nascimento' class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-lg-3">
                                          <div class="form-group">
                                              <label>Telefone</label>
                                              <input type="text" name='telefone' class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="form-group">
                                              <label>Endereço</label>
                                              <input type="text" name='endereco' class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <label>Limite de Credito</label>
                                              <input type="text" name='limitede_credito' class="form-control">
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Cadastra</button>
                              </div>
                          </form>
                      </div>
                      <!-- /.card -->
                  </div>
                  <!-- ***************** FIM -->
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->