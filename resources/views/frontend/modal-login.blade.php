
<div class="row ">
    
        <form action="{{ route('site.postlogin') }}" method="post">
            @csrf
            <h4>Đăng nhập</h4>
            <label for="username">Tên tài khoản hoặc địa chỉ email</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
            @if ($errors->has('username'))
                <div style="  font-size: small;
            " class="text-danger">
                    {{ $errors->first('username') }}
                </div>
            @endif
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" class="form-control" >
            @if ($errors->has('password'))
                <div style="  font-size: small;
            " class="text-danger">
                    {{ $errors->first('password') }}
                </div>
            @endif
            <input type="checkbox" name="remember" id="remember">
            <label for="remember" class="pt-3 pb-2">Ghi nhớ tài khoản</label><br />
            <div style="  font-size: medium;
                " class="text-danger mb-2">
                @if(isset($error_login))
                {{ $error_login }}
                @endif
            </div>
            <button type="submit">Đăng nhập</button><br />
           
            
        </form>
    </div>
</div>