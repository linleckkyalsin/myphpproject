<?php require "view/partials/heading.php" ?>
<h1>User Names
</h1>
<?php foreach($users as $user) :?>
    <li><?= "$user->id -$user->name"?> </li>
<?php endforeach ;?>
<h1>Submit your Name</h1>
    <form action="names" method="POST">
        <input type="text" name="name" />
        <input type="submit" value="Submit">
    </form>


    <h1>Update your Name</h1>
    <form action="updates" method="POST">
        <div>

       <label> Enter ID</label> <input type="text" name="id" />
</div>
      <div>
      <label> Enter Name</label>
      <input type="text" name="name" />
</div>
</div>
      <div>
      <label> Where id is</label>
      <input type="text" name="where" />
</div>
       
        <input type="submit" value="Submit">
    </form>
    <h1>Delete your Name</h1>
    <form action="deletes" method="POST">
 
      <div>
      <label> Where id is</label>
      <input type="text" name="where" />
</div>
       
        <input type="submit" value="Submit">
    </form>


    <style>
      ul,
        li {
            list-style: none;
            
        }
    </style>

   
    <?php require "view/partials/footer.php" ?>