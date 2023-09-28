<span x-show="!open">
  <?php if(isset($customCaretDownIcon)): ?>
      <?php echo e($customCaretDownIcon); ?>

  <?php else: ?>
      
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
  <?php endif; ?> 
</span>
<span x-show="open">
  <?php if(isset($customCaretUpIcon)): ?>
      <?php echo e($customCaretUpIcon); ?>

  <?php else: ?>
      
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
      </svg>
  <?php endif; ?> 
</span><?php /**PATH C:\Users\Administrator\Downloads\230922_Laravel_category\Laravel-vite-tailwind-simple-site\resources\views/vendor/simple-select/components/caret-icons.blade.php ENDPATH**/ ?>