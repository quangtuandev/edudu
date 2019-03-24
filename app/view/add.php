<h2>Create new task</h2>

<form method="post" action="index.php?page=add">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required/>
    </div>
    <div class="row">
    <div class="form-group col-md-6 ">
        <label>Start Date</label>
        <input type="date" name="start" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label>End Date</label>
        <input type="date" name="end" class="form-control" required>
    </div>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select name = "status" class="form-control">
        <Option value = "Planning">Planning</Option>
        <Option value = "Doing">Doing</Option>
        <Option value = "Complete">Complete</Option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>