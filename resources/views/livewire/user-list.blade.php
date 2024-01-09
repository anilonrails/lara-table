<div>

    <section class="mt-10">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden">
                <div class="flex items-center justify-between d p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <input type="text" class="bg-gray-50 border border-gray-300" placeholder="Search" required wire:model.live.debounce.500ms="search" />
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase">
                            <tr>
                                <th wire:click.live="doSort('name')" class="px-4 py-3"><span class="flex gap-3 items-center cursor-pointer">Name<x-heroicon-s-chevron-up class="w-4 h-4"/></span></th>
                                <th wire:click.live="doSort('email')" class="px-4 py-3">Email</th>
                                <th wire:click.live="doSort('gender')" class="px-4 py-3">Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="border-b dark:border-gray-700">
                                <th class="px-4 py-3">{{$user->first_name}}</th>
                                <td class="px-4 py-3">{{$user->email}}</td>
                                <td class="px-4 py-3">{{$user->gender}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="py-4 px-3">
                    <div class="flex">
                        <div class="flex space-x-4 items-center mb-3">
                            <label for="">Per Page</label>
                            <select wire:model.live="perPage">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                    </div>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </section>
</div>
