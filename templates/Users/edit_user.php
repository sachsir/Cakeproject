<?= $this->Form->create($user, [
  "id" => "frm-edit-branch"
]) ?>
<div class="row custom-padding">
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>First Name</label>
           <input type="text" value="<?= $user->fname ?>" 
                required class="form-control" placeholder="Name" name="fname">
       </div>
   </div>
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Last Name</label>
           <input type="text" value="<?= $user->lname ?>" 
                required class="form-control" placeholder="Name" name="lname">
       </div>
   </div>
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Email</label>
           <input type="email" value="<?= $user->email ?>" 
               required class="form-control" placeholder="email" name="email">
       </div>
   </div>
</div>
<div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Gender</label>
           <input type="text" value="<?= $user->gender ?>" 
                required class="form-control" placeholder="gender" name="gender">
       </div>
   </div>
<div class="row custom-padding">
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Phone No</label>
           <input type="text" value="<?= $user->phone ?>" 
             required class="form-control" 
                     placeholder="Phone No" name="phone">
       </div>
   </div>
</div>


<div class="row custom-padding">
   <div class="col-sm-6">
       <!-- Select multiple-->
       <div class="form-group">
           <button class="btn btn-primary">Submit</button>
       </div>
   </div>
</div>
  <?= $this->Form->end() ?>