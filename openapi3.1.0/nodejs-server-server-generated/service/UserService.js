'use strict';


/**
 * Create user
 * This can only be done by the logged in user.
 *
 * body User Created user object (optional)
 * returns User
 **/
exports.createUser = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "firstName" : "",
  "lastName" : "",
  "password" : "",
  "userStatus" : "",
  "phone" : "",
  "id" : "",
  "email" : "",
  "username" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}


/**
 * Create user
 * This can only be done by the logged in user.
 *
 * body User Created user object (optional)
 * returns User
 **/
exports.createUser = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "firstName" : "",
  "lastName" : "",
  "password" : "",
  "userStatus" : "",
  "phone" : "",
  "id" : "",
  "email" : "",
  "username" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}


/**
 * Creates list of users with given input array
 * Creates list of users with given input array
 *
 * body   (optional)
 * returns User
 **/
exports.createUsersWithListInput = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "firstName" : "",
  "lastName" : "",
  "password" : "",
  "userStatus" : "",
  "phone" : "",
  "id" : "",
  "email" : "",
  "username" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}


/**
 * Delete user
 * This can only be done by the logged in user.
 *
 * username  The name that needs to be deleted
 * no response value expected for this operation
 **/
exports.deleteUser = function(username) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Get user by user name
 *
 * username  The name that needs to be fetched. Use user1 for testing. 
 * returns User
 **/
exports.getUserByName = function(username) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "firstName" : "",
  "lastName" : "",
  "password" : "",
  "userStatus" : "",
  "phone" : "",
  "id" : "",
  "email" : "",
  "username" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}


/**
 * Logs user into the system
 *
 * username  The user name for login (optional)
 * password  The password for login in clear text (optional)
 * no response value expected for this operation
 **/
exports.loginUser = function(username,password) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Logs out current logged in user session
 *
 * no response value expected for this operation
 **/
exports.logoutUser = function() {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Update user
 * This can only be done by the logged in user.
 *
 * body User Update an existent user in the store (optional)
 * username  name that need to be deleted
 * no response value expected for this operation
 **/
exports.updateUser = function(body,username) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Update user
 * This can only be done by the logged in user.
 *
 * body User Update an existent user in the store (optional)
 * username  name that need to be deleted
 * no response value expected for this operation
 **/
exports.updateUser = function(body,username) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}

