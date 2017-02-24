<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<h2><b><center>Tambah Pegawai</center></b></h2>
<hr>
    <div class="row">
                <div class="panel-body">

                        <?php echo Form::open(['url' => '\Pegawai', 'enctype' => 'multipart/form-data', 'files' => true]); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                            <div class="form-group">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('permission') ? ' has-error' : ''); ?>">
                            <label for="permission" class="col-md-4 control-label">Permission</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <select id="permission" type="text" class="form-control" name="permission" required>
                                    <option value="Admin">Admin</option>
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Bendahara">Bendahara</option>
                                </select> 

                                <?php if($errors->has('permission')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('permission')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <hr>

                            <div class="container-fluid">
                            <div class="row">
                                <div class="panel-body">

                           <div class="form-group">
                            <label for="Nip" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <input id="Nip" type="text" class="form-control" name="Nip" required>
                            </div>
                        </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('Jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="Jabatan_id" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <?php if($errors->has('Jabatan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Jabatan_id')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                                <select class="form-control" name="Jabatan_id">
                                    <?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('Golongan_id') ? ' has-error' : ''); ?>">
                            <label for="Golongan_id" class="col-md-4 control-label">Golongan</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <?php if($errors->has('Golongan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Golongan_id')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                                <select class="form-control" name="Golongan_id">
                                    <?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Photo" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                             <div class="form-group">
                                <input id="Photo" type="file" class="form-control" name="Photo" required>
                            </div>
                        </div>
                        </div>


                        <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                         <?php echo Form::submit('Simpan', ['class' => 'btn btn-warning']); ?>  
                         <?php echo Form::close(); ?>

                            </div>
                            </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>