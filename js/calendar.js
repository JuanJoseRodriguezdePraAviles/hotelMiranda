function formatDate(dateString) {
    if(!dateString) return "Select a date";
    const date = new Date(dateString);
    const day = date.getDate();
    const month = date.toLocaleDateString('en-GB', {month: 'long' });
    const year = date.getFullYear();

    function getDaySuffix(day) {
        if(day>3 && day<21) {
            return "th";
        }
        switch(day%10) {
            case 1: return "st";
            case 2: return "nd";
            case 3: return "rd";
            default: return "th";
        }
    }
    return `${day}${getDaySuffix(day)} ${month} ${year}`;
}


document.getElementById("arrival-date-input") && document.getElementById("arrival-date-input").addEventListener("change", function () {
    const formattedDate = formatDate(this.value);
    document.getElementById("arrival-formatted-date").textContent = formattedDate;
});
document.getElementById("return-date-input") && document.getElementById("return-date-input").addEventListener("change", function () {
    const formattedDate = formatDate(this.value);
    document.getElementById("return-formatted-date").textContent = formattedDate;
});

document.getElementById("icon-arrival-input-container") && document.getElementById("icon-arrival-input-container").addEventListener('click', ()=> {
    const input = document.getElementById("arrival-date-input");
    input.focus();
    input.showPicker?.();
});
document.getElementById("icon-return-input-container") && document.getElementById("icon-return-input-container").addEventListener('click', ()=> {
    const input = document.getElementById("return-date-input");
    input.focus();
    input.showPicker?.();
});

