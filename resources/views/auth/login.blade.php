@extends('auth.contenido')

@section('login')
<div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4" style="background-color: ">
          <form method="POST" action="{{ route('login')}}">
          {{ csrf_field() }}
              <div class="card-body text-center">
               <div class="login"><h1 style="background: rgba(26, 188, 156,1.0); font-family: 'Open Sans', sans-serif; text-transform: uppercase; olor: #fff; text-align: center; border-top-left-radius: 3px; border-top-right-radius: 3px;">Login</h1></div> 
              <p class="text-muted">Control de acceso al sistema</p>
              <div class="field{{$errors->has('usuario' ? 'is-invalid' : '')}}">
                 <span class="input-group-addon">
                  <i class="fa fa-user"></i>
                <input type="text" value="{{old('usuario')}}" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
              </span>
                {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="field{{$errors->has('password' ? 'is-invalid' : '')}}">
                <span class="input-group-addon">
                  <i class="fa fa-lock"></i>
                   <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </span>
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <br>
                  <button type="submit" class="btn btn-primary" style="background-color: #16a085; margin-top: 15px; width: 270px;
                    text-align: center; font-size: 14px; font-family: 'Open Sans',sans-serif; font-weight: bold; padding: 12px 0; letter-spacing: 0; box-shadow: inset 0px 0px 0px 0px;">Acceder</button>
            </div>
          </form>
          </div>
      </div>
    </div>
@endsection