<?php
/* Smarty version 3.1.33, created on 2019-03-14 12:00:52
  from 'C:\wamp64\www\CMS\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8a7ab4564e16_08840965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b803ed21309a0ec4bfecbe1eacbad0f0bbec50f' => 
    array (
      0 => 'C:\\wamp64\\www\\CMS\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1552263419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a7ab4564e16_08840965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10710985605c8a7ab4555b96_80235244', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9774044115c8a7ab4557e74_67179737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3400593295c8a7ab455d2f3_89803223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8196515225c8a7ab455a825_58171823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3400593295c8a7ab455d2f3_89803223', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10710985605c8a7ab4555b96_80235244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10710985605c8a7ab4555b96_80235244',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9774044115c8a7ab4557e74_67179737',
  ),
  'page_content' => 
  array (
    0 => 'Block_8196515225c8a7ab455a825_58171823',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3400593295c8a7ab455d2f3_89803223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9774044115c8a7ab4557e74_67179737', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8196515225c8a7ab455a825_58171823', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
