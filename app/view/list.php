<table class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?php echo $task->title; ?></td>
                <td><?php echo $task->start; ?></td>
                <td><?php echo $task->end; ?></td>
                <td><?php echo $task->status; ?></td>
                <td><a href="index.php?page=edit&id=<?php echo $task->id; ?>">Update</a></td> 
                <td><a href="index.php?page=delete&id=<?php echo $task->id; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
