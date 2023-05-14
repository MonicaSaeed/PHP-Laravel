<div id="form">
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('checkErrors') }}" >  
        @csrf

        <!-- value: save input after submit  -->
        Fullname: <input type="text" name="name" placeholder="Enter your name">
        <span class="error">* @error ('name') {{$message}} @enderror</span>
        <br><br>
    
        Username: <input type="text" name="user_name" placeholder="Enter your user name" >
        <span class="error">* @error ('user_name') {{$message}} @enderror</span>
        <br><br>
        Birthdate: <input type="date" id = "birthdate" name="birthdate" placeholder="Enter your birthdate" >
        <span class="error">* @error ('birthdate') {{$message}} @enderror</span>
        <!-- <button type="button" onclick= "getActors()">actor’s names born on the same day</button> -->
        <br><br>
        <!-- <ol id="actors"></ol>-->
        Phone: <input type="text" name="phone" placeholder="Enter your phone">
        <span class="error">* @error ('phone') {{$message}} @enderror</span>
        <br><br>
        Address: <input type="text" name="address" placeholder="Enter your address" >
        <span class="error">* @error ('address') {{$message}} @enderror</span>
        <br><br>
        Password: <input type="password" name="password" placeholder="Enter your password">
        <span class="error">* @error ('password') {{$message}} @enderror</span>
        <br><br>
        Confirm Password: <input type="password" name="confirm_password" placeholder="Confirm your password" >
        <span class="error">* @error ('confirm_password') {{$message}} @enderror</span>
        <br><br>
        E-mail: <input type="text" name="email" placeholder="Enter your email">
        <span class="error">* @error ('email') {{$message}} @enderror</span>
        <br><br>
        <input type="submit" name="submit" value="Submit" >
    </form>
</div>