const Store = function () {
  this.name = "see you";
  this.opacity = 30;
  this.peopleCount = 0;
};

Store.prototype.enter = function (n) {
  this.peopleCount += n;
  return this;
};

Store.prototype.leave = function (n) {
  this.peopleCount -= n;
  return this;
};

Store.prototype.showPeopleCount = function (n) {
  console.log(this.peopleCount);
};

const thisStore = new Store();

thisStore.enter(2).leave(1).enter(2);

console.log(thisStore.peopleCount);
