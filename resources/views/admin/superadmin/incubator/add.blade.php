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

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                        </ul>
          </div>
          <br>
          <div class="form-group has-feedback">
            {{ Form::label('icon', 'Icon') }}
            <div class="form-group"> 
              <select name="icon" class="form-control">
                <option value="fa-car"><i class="fa fa-user nav-icon"></i> Car</option>
                <option value="fa-bell"><i class="fa fa-user nav-icon"></i> Bell</option>
                <option value="fa-bolt"><i class="fa fa-user nav-icon"></i> Bolt</option>
                <option value="fa-cloud"><i class="fa fa-user nav-icon"></i> Cloud</option>
                <option value="fa-code-fork"><i class="fa fa-user nav-icon"></i> Code Fork</option>
                <option value="fa-crosshairs"><i class="fa fa-user nav-icon"></i> Crosshair</option>
                <option value="fa-comments-o"><i class="fa fa-user nav-icon"></i> Comments-o</option>
                <option value="fa-industry"><i class="fa fa-user nav-icon"></i> Industry</option>
                <option value="fa-microchip"><i class="fa fa-user nav-icon"></i> Microchip</option>
                <option value="fa-recycle"><i class="fa fa-user nav-icon"></i> Recycle</option>
                <option value="fa-camera-retro"><i class="fa fa-user nav-icon"></i> Camera Retro</option>
              </select>
            </div>
          </div>
          <div class="form-group has-feedback">
            {{ Form::label('subject', 'Judul') }}
            <input type="text" class="form-control" placeholder="Subject" name="subject" value="">
          </div>
          <div class="form-group has-feedback">
            {{ Form::label('description', 'Deskripsi') }}
            <textarea class="col-md-12" name="description" id="" rows="3"  placeholder="Deskripsi"></textarea>
          </div>

          <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
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
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
          </div>

        </div><!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary pull-right">Tambah Benefit</button>
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