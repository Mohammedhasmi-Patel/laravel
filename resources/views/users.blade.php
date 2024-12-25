<div>
   <h1>User Form</h1>
   <form action="/users" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter Username">
    <br/>
    <br/>

    <input type="password" name="password" placeholder="Enter Password">
    <br/>
    <br/>

    <button>Submit</button>


   </form>
</div>