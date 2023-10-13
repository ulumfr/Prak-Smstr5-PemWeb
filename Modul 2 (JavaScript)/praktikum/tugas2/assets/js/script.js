document.addEventListener("DOMContentLoaded", function() {
    const inputActivity = document.getElementById("inputActivity");
    const addActivityButton = document.getElementById("addActivity");
    const activityList = document.getElementById("activityList");

    addActivityButton.addEventListener("click", function() {
        const activityText = inputActivity.value.trim();
        if (activityText !== "") {
            const listItem = document.createElement("div");
            listItem.innerHTML = `
                <div class="d-flex justify-content-between align-items-center m-2">
                    <span>${activityText}</span>
                    <div>
                        <button class="btn btn-primary btn-sm mx-1 edit-button"><i class='bx bx-edit'></i></button>
                        <button class="btn btn-danger btn-sm delete-button"><i class='bx bxs-trash-alt'></i></button>
                    </div>
                </div>
            `;

            activityList.appendChild(listItem);
            inputActivity.value = "";

            const editButton = listItem.querySelector(".edit-button");
            editButton.addEventListener("click", function() {
                const newText = prompt("Edit activity:", activityText);
                if (newText !== null) {
                    listItem.querySelector("span").textContent = newText;
                }
            });

            const deleteButton = listItem.querySelector(".delete-button");
            deleteButton.addEventListener("click", function() {
                activityList.removeChild(listItem);
            });
        }
    });
});
