<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BM Chat- Admin</title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/admin.css','resources/js/admin.js','resource/js/app.js','resource/css/app.css']); ?>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                            
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Option Modifaction</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admindashboard.blade.php"><button type="button" class="btn btn-primary">Dashboard</button></a></li>
                            <li class="breadcrumb-item active">Option Modifaction</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table>
                                    <tr class="bg-dark text-black">
                                        <th>SN</th>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>General</td>
                                        <td><button type="button" class="btn btn-primary">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Facilities</td>
                                        <td><button type="button" class="btn btn-primary">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Transportation</td>
                                        <td><button type="button" class="btn btn-primary">Edit</button></td>
                                    </tr>
                                    
                                </table>
                            
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">mysql bata fetch gharnu hai option chai aailey yetikai rakhako  </div></div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
    </body>
</html>
<?php /**PATH /Users/nikeshbhujel/Documents/project-ii/resources/views/optionmodifacation.blade.php ENDPATH**/ ?>