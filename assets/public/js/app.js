const userMessages = [];

const userMessageForm = document.querySelector('form');
const userMessagesList = document.querySelector('ul');

function renderMessages() {
  let messageItems = '';
  for (const message of userMessages) {
    messageItems = `
      ${messageItems}
     
    `;
  }

  userMessagesList.innerHTML = messageItems;
}

function formSubmitHandler(event) {
  event.preventDefault();
  const userMessageInput = event.target.querySelector('textarea');
 
  const userMessage = userMessageInput.value;
  
  if (
    !userMessage ||
   userMessage.trim().length === 0) {
    alert('Please insert a valid message.');
    return;
  }

  userMessages.push({
    text: userMessage,
  
  });

  userMessageInput.value = '';
  
  renderMessages();
}

userMessageForm.addEventListener('submit', formSubmitHandler);
