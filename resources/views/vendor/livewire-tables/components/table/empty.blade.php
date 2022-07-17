@aware(['component'])

@php
    $attributes = $attributes->merge(['wire:key' => 'empty-message-'.$component->id]);
    $theme = $component->getTheme();
@endphp

@if ($theme === 'tailwind')
    <tr {{ $attributes }}>
        <td colspan="{{ $component->getColspanCount() }}">
            <div class="flex justify-center items-center space-x-2 dark:bg-gray-800">
                <span class="font-medium py-8 text-gray-400 text-lg dark:text-white">{{ $component->getEmptyMessage() }}</span>
            </div>
        </td>
    </tr>
@elseif ($theme === 'bootstrap-4' || $theme === 'bootstrap-5')
     <tr {{ $attributes }}>
        <td colspan="{{ $component->getColspanCount() }}">
            <div class="py-4 text-center">
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                </lord-icon>
                <h5 class="mt-4">Belum Ada Data yang Tersimpan</h5>
            </div>
        </td>
    </tr>
@endif
