<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Details'), ['controller' => 'ProductDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Detail'), ['controller' => 'ProductDetails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products view large-10 medium-9 columns">
    <h2><?= h($product->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($product->name) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $product->has('user') ? $this->Html->link($product->user->name, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($product->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Images') ?></h4>
    <?php if (!empty($product->images)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Image') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($product->images as $images): ?>
        <tr>
            <td><?= h($images->id) ?></td>
            <td><?= h($images->product_id) ?></td>
            <td><?= h($images->image) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ProductCategories') ?></h4>
    <?php if (!empty($product->product_categories)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Category Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($product->product_categories as $productCategories): ?>
        <tr>
            <td><?= h($productCategories->id) ?></td>
            <td><?= h($productCategories->product_id) ?></td>
            <td><?= h($productCategories->category_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ProductCategories', 'action' => 'view', $productCategories->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductCategories', 'action' => 'edit', $productCategories->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductCategories', 'action' => 'delete', $productCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategories->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ProductDetails') ?></h4>
    <?php if (!empty($product->product_details)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Details') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($product->product_details as $productDetails): ?>
        <tr>
            <td><?= h($productDetails->id) ?></td>
            <td><?= h($productDetails->product_id) ?></td>
            <td><?= h($productDetails->details) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ProductDetails', 'action' => 'view', $productDetails->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductDetails', 'action' => 'edit', $productDetails->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductDetails', 'action' => 'delete', $productDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productDetails->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
