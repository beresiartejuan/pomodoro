<?php $this->layout('assets/base', ['title' => 'Home']); ?>

<?=$this->insert('assets/navbar')?>

<main>
  <h1>HOLA <?php echo Session::get('user_name')?></h1>
</main>