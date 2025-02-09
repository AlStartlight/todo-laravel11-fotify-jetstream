<div class="">
   @livewire('todo-list')
   @if ($showModal)
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">
                    {{ $task_id ? 'Edit Task' : 'Add New Task' }}
                </h2>

                <form wire:submit.prevent="saveTask">
                    <label class="block mb-2 text-gray-600">Task Name</label>
                    <input type="text" wire:model="title" required class="w-full px-3 py-2 border rounded-lg">

                    <label class="block mt-4 mb-2 text-gray-600">Description</label>
                    <textarea wire:model="description" class="w-full px-3 py-2 border rounded-lg"></textarea>

                    <label class="block mt-4 mb-2 text-gray-600">Priority</label>
                    <select wire:model="priority" class="w-full px-3 py-2 border rounded-lg">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>

                    <label class="block mt-4 mb-2 text-gray-600">Status</label>
                    <select wire:model="status" class="w-full px-3 py-2 border rounded-lg">
                        <option value="Not Started">Not Started</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Complete">Complete</option>
                    </select>

                    <label class="block mt-4 mb-2 text-gray-600">Due Date</label>
                    <input type="date" wire:model="due_date" class="w-full px-3 py-2 border rounded-lg">

                    <div class="mt-4 flex justify-end space-x-2">
                        <button type="button" wire:click="closeModal" class="px-4 py-2 bg-gray-300 rounded-lg">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
    
    

</div>
@if (session()->has('message'))
    <script>
        Toastify({
            text: "{{ session('message') }}",
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "green",
        }).showToast();
    </script>
@endif

<script>
    Livewire.on('taskAdded', () => {
        Toastify({
                text: "✅ Task successfully added!",
                duration: 3000,
                gravity: "top", // Bisa "top" atau "bottom"
                position: "right", // Bisa "left", "center", atau "right"
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                stopOnFocus: true, 
            }).showToast();
    });
</script>