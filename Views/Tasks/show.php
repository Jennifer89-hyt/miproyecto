<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
    Tasks
<?= $this->endSection() ?>

<?= $this->section("content") ?>
    <h1>Tasks</h1>
    <a href="<?= site_url("/taks")?>">&laquo; back to index</a> 
    <dl>
      
       <dt>ID</dt>
       <dd><?= $task['id'] ?></dd>

       <dt>Description</dt>
       <dd><?= esc($task['descripcion']) ?></dd>

       
       <dt>Created at</dt>
       <dd><?= $task['created_at'] ?></dd>

       <dt>Updated at</dt>
       <dd><?= $task->updated_at ?></dd>

    </dl>
    <a href="<?=site_url('/task/edit/'.$task['id'])?>">Edit</a>
<?= $this->endSection() ?>

