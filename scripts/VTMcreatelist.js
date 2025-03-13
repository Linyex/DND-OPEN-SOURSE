const strengthInputs = document.querySelectorAll('.VTM-strength-list input');
const dexterityInputs = document.querySelectorAll('.VTM-dexterity-list input');
const staminaInputs = document.querySelectorAll('.VTM-stamina-list input');
const charismaInputs = document.querySelectorAll('.VTM-charisma-list input');
const manipulationInputs = document.querySelectorAll('.VTM-manipulation-list input');
const appearanceInputs = document.querySelectorAll('.VTM-appearance-list input');

const setActive = (input) => {
  input.classList.add('active');
};

const setInactive = (input) => {
  input.classList.remove('active');
};

const setAllInactive = (inputs) => {
  inputs.forEach((input) => {
    setInactive(input);
  });
};

const handleStrengthInput = (e) => {
  const value = e.target.value;
  const inputs = strengthInputs;

  setAllInactive(inputs);

  for (let i = 0; i < value; i++) {
    setActive(inputs[i]);
  }
};

const handleDexterityInput = (e) => {
  const value = e.target.value;
  const inputs = dexterityInputs;

  setAllInactive(inputs);

  for (let i = 0; i < value; i++) {
    setActive(inputs[i]);
  }
};

const handleStaminaInput = (e) => {
  const value = e.target.value;
  const inputs = staminaInputs;

  setAllInactive(inputs);

  for (let i = 0; i < value; i++) {
    setActive(inputs[i]);
  }
};

const handleCharismaInput = (e) => {
  const value = e.target.value;
  const inputs = charismaInputs;

  setAllInactive(inputs);

  for (let i = 0; i < value; i++) {
    setActive(inputs[i]);
  }
};

const handleManipulationInput = (e) => {
  const value = e.target.value;
  const inputs = manipulationInputs;

  setAllInactive(inputs);

  for (let i = 0; i < value; i++) {
    setActive(inputs[i]);
  }
};

const handleAppearanceInput = (e) => {
  const value = e.target.value;
  const inputs = appearanceInputs;

  setAllInactive(inputs);

  for (let i = 0; i < value; i++) {
    setActive(inputs[i]);
  }
};

strengthInputs.forEach((input) => {
  input.addEventListener('click', handleStrengthInput);
});

dexterityInputs.forEach((input) => {
  input.addEventListener('click', handleDexterityInput);
});

staminaInputs.forEach((input) => {
  input.addEventListener('click', handleStaminaInput);
});

charismaInputs.forEach((input) => {
  input.addEventListener('click', handleCharismaInput);
});

manipulationInputs.forEach((input) => {
  input.addEventListener('click', handleManipulationInput);
});

appearanceInputs.forEach((input) => {
  input.addEventListener('click', handleAppearanceInput);
});
