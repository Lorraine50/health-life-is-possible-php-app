<div class="card">
        <div class="card-header">
            CALL NOW!
        </div>
       <div class="card-body">
            <a href="tel:+27012324568" class="nav-link btn btn-success btn-secondary btn-outline-danger my-2 my-sm-0 text-white">(031) 2624821</a>
       </div>
    </div>
    <hr>

<div class="card">
    <div class="card-header">
        Services
    </div>
    <ul class="list-group list-group-flush">
        <?php foreach($consultations as $con): ?>

            <li class="list-group-item"><a href="<?php echo e(route('showConsultation', ['id' => $con->id])); ?>"><?php echo e($con->c_name); ?></a></li>
        
        <?php endforeach; ?>  
    </ul>
</div>
<hr>
<!--
<div class="card">
    <div class="card-header">
        Laboratories
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Blood test</li>
        <li class="list-group-item">Pap test</li>
        <li class="list-group-item">Screnning for STD</li>
        <li class="list-group-item">HPV</li>
    </ul>
</div>
<hr> 
<div class="card">
    <button class="btn btn-success btn-secondary btn-outline-danger text-white">Make an appointment</button>
</div>
<hr>-->
<div>
    <p class="lead">Business Hours</p>
    Monday - Sunday: 24/7 
</div>

