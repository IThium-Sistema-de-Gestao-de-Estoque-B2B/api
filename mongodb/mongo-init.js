db.createUser(
    {
        user: "ithium",
        pwd: "mongo",
        roles: [ { role: "readWrite", db: "example" } ]
    }
);


