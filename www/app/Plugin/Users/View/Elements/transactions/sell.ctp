<?php
/**
 * _create.php.ctp
 *
 * @author: David Baker <dbaker@acorncomputersolutions.com
 * Date: 7/18/14
 * Time: 11:29 AM
 */
echo $this->Form->create('Transaction',array(
        'class'=>'form-horizontal',
        'url' => array(
            'plugin'        => 'users',
            'controller'    => 'transactions',
            'action'        => 'create',
        ),
    ));
echo $this->Form->input(
    'type', array(
        'value' => 'sell',
        'type' => 'hidden',
    )
);
?>
<p>Sell your Botangle credits for cash.</p>

<div class="control-group">
    <label class="control-label span2" for="type">Desired Amount</label>
    <div class="controls span5">
        <?php echo $this->Form->input(
            'amount', array(
                'label' => false,
                'value' => '10',
            )
        ); ?>
    </div>
</div>

<div class="row-fluid Add-Payment-blocks">
    <div class="span2"></div>
    <div class="span5">
        <button type="submit" class="btn btn-primary">Sell Credits</button>
        <p class="text-info"><small>NOTE: a maximum of 100 credits can be sold each 24 hrs.</small></p>
        <p class="muted"><small>(1 Credit = 1 USD)</small></p>
    </div>
</div>
<?php echo $this->Form->end();?>
