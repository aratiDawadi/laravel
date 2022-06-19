<form action="{{route('pokhara')}}" method="POST">
    @csrf
    <div class="form">
     Name : <input type="text" name="fullname placeholder=name"> 

    </div><br>

    <div class="form">
    Date of Birth:<input type="date" name="DOB"> 
</div><br>
  
<div class="form">
    Address:<input type="text" name="address"> 
</div><br>

<div class="form">
    Mobile number:<input type="number" name="mobile"> 
</div><br>
  
  

</form>