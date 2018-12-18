@extends('admin/admin')
@section('content')

<!-- Main content -->
<div class="row">


    <div class="col-md-12">
        <form method="POST" action="{//{ URL::to('admin/benefit/'.$user_id.'/store') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="card">
                <div class="card-body">

                    @if(!empty($errors->all()))
                    <div class="alert alert-danger">
                        {{ Html::ul($errors->all())}}
                    </div>
                    @endif


                    <div class="">
                        <h3>Tambah Inkubator</h2>
{{-- 
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                                </li>
                            </ul> --}}
                    </div>
                    <br>

                    <div class="card">
                        <div class="container-fluid" style="margin: 20px">
                            <div class="row" style="margin-left: 50px">
                                <div class="card" style="background-color: lightslategray; border-radius: 10px">
                                    <div class="card-body" style="background-color: #212529; border-top-left-radius: 10px; border-top-right-radius: 10px">
                                        <div class="col-md-4 text-center">
                                            <img src="https://images.unsplash.com/photo-1440589473619-3cde28941638?ixlib=rb-1.2.1&w=1000&q=80"
                                                height="300px" style="margin-top: 10px;" />
                                            <input id="fileInput" type="file" style="display:none;" />
                                        </div>
                                    </div>
                                    <div class="card-footer text-center" style="background-color: #F4F6F9">
                                        <input class="btn btn-primary" type="button" value="Pilih Foto" onclick="document.getElementById('fileInput').click();"
                                            style="margin-bottom: 10px" />
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <h4 class="text-center"> <b>Informasi Kontak</b> </h4>
                                    <hr>
                                    <div class="form-group has-feedback" style="margin-left: 20px">
                                        {{ Form::label('name', 'Nama Inkubator') }}
                                        <input type="text" class="form-control" placeholder="Nama Inkubator" name="name"
                                            value="">
                                    </div>
                                    <div class="form-group has-feedback" style="margin-left: 20px">
                                        {{ Form::label('institution', 'Institusi') }}
                                        <input type="text" class="form-control" placeholder="Institusi" name="institution"
                                            value="">
                                    </div>
                                    <div class="form-group has-feedback" style="margin-left: 20px">
                                        {{ Form::label('phone', 'Telepon') }}
                                        <input type="text" class="form-control" placeholder="phone" name="Telepon"
                                            value="">
                                    </div>
                                    <div class="form-group has-feedback" style="margin-left: 20px">
                                        {{ Form::label('address', 'Alamat') }}
                                        <textarea class="col-md-12" name="address" id="" rows="3" placeholder="Alamat"></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <h4 class="text-center"> <b>Organisasi</b> </h4>
                    <hr>
                    <div class="card">
                      <div class="container-fluid" style="margin: 20px">
                        <div class="col-md-12" >
                            <div class="form-group has-feedback" style="margin-right: 25px">
                                {{ Form::label('head', 'Kepala') }}
                                <input type="text" class="form-control" placeholder="Kepala" name="head" value="">
                            </div>
                            <div class="form-group has-feedback" style="margin-right: 25px">
                                {{ Form::label('description', 'Deskripsi') }}
                                <textarea class="col-md-12" name="description" id="" rows="3" placeholder="Deskripsi"></textarea>
                            </div>
                            <div class="form-group has-feedback" style="margin-right: 25px">
                                {{ Form::label('visi', 'Visi') }}
                                <textarea class="col-md-12" name="visi" id="" rows="3" placeholder="Visi"></textarea>
                            </div>
                            <div class="form-group has-feedback" style="margin-right: 25px">
                                {{ Form::label('misi', 'Misi') }}
                                <textarea class="col-md-12" name="misi" id="" rows="3" placeholder="Misi"></textarea>
                            </div>
                        </div>

                      </div> 
                    </div>
                    

                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login"
                        aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="Login">Customer login</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="customer-orders.html" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email-modal" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password-modal" placeholder="password">
                                        </div>

                                        <p class="text-center">
                                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                        </p>

                                    </form>

                                    <p class="text-center text-muted">Not registered yet?</p>
                                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>!
                                        It is easy and done in 1&nbsp;minute and gives you access to special discounts
                                        and much more!</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary pull-right">Tambah Inkubator</button>
                </div>
            </div>
        </form>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!-- /.content -->

@endsection
