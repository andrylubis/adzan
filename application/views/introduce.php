<div class="container">
  <div class="row">
    <div class="col-md-12 bg-light">
      <h1>Introduce</h1>
      <br><br>
      <?php echo form_open('Introduce/create')?>
         <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="7" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
      <?php echo form_close();?>
    </div>
    <div class="col-md-12 bg-light">
      <h1>Data Introduce</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($introduce as $itr) { 
           
          ?>
          <tr>
            <td><?php echo $itr['id'];?></td>
            <td><?php echo $itr['description'];?></td>
          </tr>
          <?php } ?>      
        </tbody>
      </table>
    </div>    
  </div>
</div>