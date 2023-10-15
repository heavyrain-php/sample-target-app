'use strict';


/**
 * Delete purchase order by ID
 * For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
 *
 * orderId  ID of the order that needs to be deleted
 * no response value expected for this operation
 **/
exports.deleteOrder = function(orderId) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Returns pet inventories by status
 * Returns a map of status codes to quantities
 *
 * no response value expected for this operation
 **/
exports.getInventory = function() {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Find purchase order by ID
 * For valid response try integer IDs with value <= 5 or > 10. Other values will generate exceptions.
 *
 * orderId  ID of order that needs to be fetched
 * returns Order
 **/
exports.getOrderById = function(orderId) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "petId" : "",
  "quantity" : "",
  "id" : "",
  "shipDate" : "",
  "complete" : "",
  "status" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}


/**
 * Place an order for a pet
 * Place a new order in the store
 *
 * body Order  (optional)
 * returns Order
 **/
exports.placeOrder = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "petId" : "",
  "quantity" : "",
  "id" : "",
  "shipDate" : "",
  "complete" : "",
  "status" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}


/**
 * Place an order for a pet
 * Place a new order in the store
 *
 * body Order  (optional)
 * returns Order
 **/
exports.placeOrder = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "petId" : "",
  "quantity" : "",
  "id" : "",
  "shipDate" : "",
  "complete" : "",
  "status" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}

