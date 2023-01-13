
        <div class="container">
        <h1>Show All User List</h1>
            <br>
            <table class="table">
                <thead>
                <tr>
            <td colspan="5" align="right"><a href="<?= $this->
               Url->build('/add-user/', ['fullBase' => true]) ?>">
                          Add User</a></td>
       </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Action</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
        if (count($users) > 0) {
            foreach ($users as $index => $data) {
        ?>
                <tr>
                  <td><?= $data->id ?></td>
                  <td><?= $data->fname ?></td>
                  <td><?= $data->lname ?></td>
                  <td><?= $data->email ?></td>
                  <td><?= $data->phone ?></td>
                  <td><?= $data->gender ?></td>
                  <td><?= $data->created ?></td>
                  <td><?= $data->updated ?></td>
                  <td>
                    
       <a href="<?= $this->Url->build('/edit-user/' . $data->id, 
       ['fullBase' => true]) ?>" class="btn btn-warning">Edit</a>
                              
       <a href="<?= $this->Url->build('/delete-user/' . $data->id, 
       ['fullBase' => true]) ?>" class="btn btn-warning">Delete</a>
                    </td>
              </tr>
              <?php
            }
        }
        ?>
                </tbody>
</table>