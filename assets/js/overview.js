
const plans = {
    cannabis: "Cannabis",
    oilAndGas: "Oil and Gas",
    gold: "Gold",
    agriculture: "Agriculture",
    realEstate: "Real Estate",
    foreignExchange: "Foreign Exchange",
    cryptocurrency: "Cryptocurrency",
    retirement: "Retirement and insurance",
};

const planLinks = {
    cannabis: "https://commerce.coinbase.com/checkout/22602017-7fc1-4e19-8596-68e466d26c7d",
    oilAndGas: "https://commerce.coinbase.com/checkout/6f56bda4-6dc7-419c-8428-f5663e819c4d",
    gold: "https://commerce.coinbase.com/checkout/80906ebb-5077-4a16-9cdd-6d5a76115608",
    agriculture: "https://commerce.coinbase.com/checkout/31ddb95c-688a-4b5f-90dd-a4ae95fa8ef6",
    realEstate: "https://commerce.coinbase.com/checkout/d6ae0110-2aed-4136-805b-789ac76210df",
    foreignExchange: "https://commerce.coinbase.com/checkout/9f5264c8-ae0f-4d0f-ab4d-eb9a46cb9081",
    cryptocurrency: "https://commerce.coinbase.com/checkout/5b7b9be4-2096-4b54-a603-335f4e4975ec",
    retirement: "https://commerce.coinbase.com/checkout/89264bb1-952c-4c91-95d6-06054bc4796b",
};

const checkboxes = document.getElementsByClassName("imgCheck");
const procedeButton = document.getElementById("procedeButton");
const modalCloseButton = document.getElementById("modalCloseButton");
const userId = document.getElementById("userId");
let selectedPlan = '';

const handleSelect = (event) => {
    ([...checkboxes].forEach(el => el.checked = false));
    event.target.checked = true;
    procedeButton.href = planLinks[event.target.id];
    procedeButton.classList.remove("disabled");
    selectedPlan = plans[event.target.id]
}

([...checkboxes].forEach(el => el.addEventListener('change', handleSelect)));

procedeButton.addEventListener('click', (event) => {
    event.preventDefault();
    window.open(event.target.href, '_blank').focus();
    (async () => {
        // create formData object
        const formData = new FormData();
        formData.append('userId', userId.value);
        formData.append('plan', selectedPlan);
        formData.append('updatePlan', '');
        
        const rawResponse = await fetch('../processes/dashboard.php', {
            method: 'POST',
            body: formData
        });
        const content = await rawResponse.json();
        console.log(content);
        modalCloseButton.click();
    })();
});

const sideBarToggle = () => {
    const sideBarToggle = document.getElementsByClassName("sideBarToggle");
    ([...sideBarToggle].forEach(el => el.classList.remove("active")));
}


// Withdrawal functionality
const walletType = document.getElementById("walletType");
const walletAddress = document.getElementById("walletAddress");
const withdrawAmount = document.getElementById("withdrawAmount");
const saveButton = document.getElementById("saveButton");
const withdrawalModalCloseButton = document.getElementById("withdrawalModalCloseButton");

const saveWalletData = () => {
    if(walletType.value == ""){
        alert('Please select wallet type.');
        return 0;
    }else if(walletAddress.value == ""){
        alert('Please enter a wallet address.');
        return 0;
    }else if(withdrawAmount.value == "" || isNaN(withdrawAmount.value) || withdrawAmount.value < 1){
        alert('Please enter a valid withdrawal amount.');
        return 0;
    }
    (async () => {
        // create formData object
        const formData = new FormData();
        formData.append('userId', userId.value);
        formData.append('walletType', walletType.value);
        formData.append('walletAddress', walletAddress.value);
        formData.append('withdrawAmount', withdrawAmount.value);
        
        const rawResponse = await fetch('../processes/dashboard.php', {
            method: 'POST',
            body: formData
        });
        const content = await rawResponse.json();
        console.log(content);
        withdrawalModalCloseButton.click();
        alert('Your withdrwal request have been saved successfully\n and will be processed in less than 24hrs');
    })();
}