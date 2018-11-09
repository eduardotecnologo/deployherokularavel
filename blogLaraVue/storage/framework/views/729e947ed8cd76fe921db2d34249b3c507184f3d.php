<?php $__env->startSection('content'); ?>
<pagina tamanho="10">
        <painel titulo="Painel de Controle">
            Painel de Controle
            <div class="row">
                <div class="col-md-4">
                <box qtd="80" titulo="Artigos" url="<?php echo e(route('artigos.index')); ?>" cor="orange" icone="fa fa-comments-o"></box> 
            </div>
                <div class="col-md-4">
                <box qtd="104" titulo="Usuários" url="#" cor="blue" icone="fa fa-users"></box> 
            </div>
                <div class="col-md-4">
                    <box qtd="2" titulo="Autores" url="#" cor="red" icone="fa fa-user-circle"></box>  
            </div>
        </painel>
</pagina>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>