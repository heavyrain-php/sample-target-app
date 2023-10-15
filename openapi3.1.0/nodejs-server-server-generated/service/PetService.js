'use strict';


/**
 * Add a new pet to the store
 * Add a new pet to the store
 *
 * body Pet Create a new pet in the store
 * returns Pet
 **/
exports.addPet = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "photoUrls" : "",
  "name" : "",
  "id" : "",
  "category" : {
    "name" : "",
    "id" : ""
  },
  "tags" : "",
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
 * Add a new pet to the store
 * Add a new pet to the store
 *
 * body Pet Create a new pet in the store
 * returns Pet
 **/
exports.addPet = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "photoUrls" : "",
  "name" : "",
  "id" : "",
  "category" : {
    "name" : "",
    "id" : ""
  },
  "tags" : "",
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
 * Deletes a pet
 * delete a pet
 *
 * petId  Pet id to delete
 * api_key   (optional)
 * no response value expected for this operation
 **/
exports.deletePet = function(petId,api_key) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Finds Pets by status
 * Multiple status values can be provided with comma separated strings
 *
 * status  Status values that need to be considered for filter (optional)
 * no response value expected for this operation
 **/
exports.findPetsByStatus = function(status) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Finds Pets by tags
 * Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.
 *
 * tags  Tags to filter by (optional)
 * no response value expected for this operation
 **/
exports.findPetsByTags = function(tags) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * Find pet by ID
 * Returns a single pet
 *
 * petId  ID of pet to return
 * returns Pet
 **/
exports.getPetById = function(petId) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "photoUrls" : "",
  "name" : "",
  "id" : "",
  "category" : {
    "name" : "",
    "id" : ""
  },
  "tags" : "",
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
 * Update an existing pet
 * Update an existing pet by Id
 *
 * body Pet Update an existent pet in the store
 * returns Pet
 **/
exports.updatePet = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "photoUrls" : "",
  "name" : "",
  "id" : "",
  "category" : {
    "name" : "",
    "id" : ""
  },
  "tags" : "",
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
 * Update an existing pet
 * Update an existing pet by Id
 *
 * body Pet Update an existent pet in the store
 * returns Pet
 **/
exports.updatePet = function(body) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "photoUrls" : "",
  "name" : "",
  "id" : "",
  "category" : {
    "name" : "",
    "id" : ""
  },
  "tags" : "",
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
 * Updates a pet in the store with form data
 *
 * petId  ID of pet that needs to be updated
 * name  Name of pet that needs to be updated (optional)
 * status  Status of pet that needs to be updated (optional)
 * no response value expected for this operation
 **/
exports.updatePetWithForm = function(petId,name,status) {
  return new Promise(function(resolve, reject) {
    resolve();
  });
}


/**
 * uploads an image
 *
 * body   (optional)
 * additionalMetadata  Additional Metadata (optional)
 * petId  ID of pet to update
 * returns ApiResponse
 **/
exports.uploadFile = function(body,additionalMetadata,petId) {
  return new Promise(function(resolve, reject) {
    var examples = {};
    examples['application/json'] = {
  "code" : "",
  "type" : "",
  "message" : ""
};
    if (Object.keys(examples).length > 0) {
      resolve(examples[Object.keys(examples)[0]]);
    } else {
      resolve();
    }
  });
}

