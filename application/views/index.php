<div class="container">
    <h2 style="margin-top: 0;">
        <small>Selamat datang</small>
        <?php echo $this->session->userdata('nama') ?>
    </h2>
    <hr />
    <div class="form-group">
        <label>Role : </label>
        <?php echo ucwords($this->session->userdata('role')) ?>
    </div>
</div>
<?php
