const inputActivity = document.getElementById('inputActivity');
const addActivityButton = document.getElementById('addActivity');
const activityList = document.getElementById('activityList');

addActivityButton.addEventListener('click', function() {
    const activityText = inputActivity.value.trim();

    if (activityText === '') {
        alert('Inputan tidak boleh kosong!!!');
        return;
    }

    const activityItem = document.createElement('div');
    activityItem.innerHTML = 
        `<div class="d-flex justify-content-between align-items-center m-2">
            <div class="input-group-text gap-2 w-100 bg-transparent p-2 rounded-1">
                <input type="text" class="form-control rounded-2 bg-transparent border-0" value="${activityText}" disabled>
                
                <div>
                    <button class="btn btn-success success-button rounded-2"><i class='bx bx-check'></i></button>
                    <button class="btn btn-primary edit-button rounded-2"><i class='bx bx-edit'></i></button>
                    <button class="btn btn-danger delete-button rounded-2"><i class='bx bxs-trash-alt'></i></button>
                    <button class="btn btn-primary save-button rounded-2 d-none"><i class='bx bxs-save'></i></button>
                </div>
                
            </div>
        </div>`;

    activityList.appendChild(activityItem);
    inputActivity.value = '';
    
    const activityInput = activityItem.querySelector('input');
    const successButton = activityItem.querySelector('.success-button');
    const editButton = activityItem.querySelector('.edit-button');
    const saveButton = activityItem.querySelector('.save-button');
    const deleteButton = activityItem.querySelector('.delete-button');

    successButton.addEventListener('click', function() {
        activityInput.classList.toggle('text-decoration-line-through');
    });

    editButton.addEventListener('click', function() {
        activityInput.removeAttribute('disabled');
        saveButton.classList.remove('d-none');
        successButton.classList.add('d-none');
        editButton.classList.add('d-none');
        deleteButton.classList.add('d-none');
    });

    saveButton.addEventListener('click', function() {
        activityInput.setAttribute('disabled', 'true');
        successButton.classList.remove('d-none');
        editButton.classList.remove('d-none');
        deleteButton.classList.remove('d-none');
        saveButton.classList.add('d-none');
    });

    deleteButton.addEventListener('click', function() {
        activityList.removeChild(activityItem);
    });
});