class Phone {
    marque

    constructor(marque){
        this.marque = marque
    }

    message() {
        return this.marque
    }
}

class Android extends Phone {
    model

    constructor(marque, model){
        super(marque)
        this.model = model
    }

    message2(arg) {
        console.log(arg + " " + this.message() + " " + this.model)
    }
}

let phone = new Android("Xiaomi", "Mi11")
phone.message2("coucou")