import pymongo

my_client= pymongo.MongoClient("mongodb+srv://maomao:maomao123@animal-axwfm.gcp.mongodb.net/user_info?retryWrites=true&w=majority")


my_database = my_client.user_info

my_collection = my_database.neko
my_collection.insert_one({
    "name": "apple",
    "calories": 266,
    "fats": {
        "saturated": 4.5,
        "trans": 0.2
    },
    "protein": 11
})