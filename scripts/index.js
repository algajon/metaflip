import { ethers } from "./ethers-5.6.esm.min.js"
import { abi, contractAddress } from "./constants.js"


// CONNECTION OF METAMASK // 

const connectButton = document.getElementById("connectButton")
const payButton = document.getElementById("payButton")
const connectLedger = document.getElementById("ledgerButton")
connectButton.onclick = connect
payButton.onclick = pay

async function connect() {
  if (typeof window.ethereum !== "undefined") {
    try {
      await ethereum.request({ method: "eth_requestAccounts" })
    } catch (error) {
      console.log(error)
    }
    connectButton.innerHTML = "Already Connected!"
    const accounts = await ethereum.request({ method: "eth_accounts" })
    console.log(accounts)
  } else {
    connectButton.innerHTML = "Please install MetaMask"
  }
}

async function pay() {

  console.log(`paying with ${ethAmount}...`)
  if (typeof window.ethereum !== "undefined") {
    const provider = new ethers.providers.Web3Provider(window.ethereum)
    const signer = provider.getSigner()
    const contract = new ethers.Contract(contractAddress, abi, signer)
    try {
      const transactionResponse = await contract.pay({
        value: ethers.utils.parseEther(ethAmount),
      })
      await listenForTransactionMine(transactionResponse, provider)
    } catch (error) {
      console.log(error)
    }
  } else {
    payButton.innerHTML = "Please install MetaMask"
  }
}

function listenForTransactionMine(transactionResponse, provider) {
    console.log(`Mining ${transactionResponse.hash}`)
    return new Promise((resolve, reject) => {
        try {
            provider.once(transactionResponse.hash, (transactionReceipt) => {
                console.log(
                    `Completed with ${transactionReceipt.confirmations} confirmations. `
                )
                resolve()
            })
        } catch (error) {
            reject(error)
        }
    })
}





// SOLANA CONNECTION BELOW //



const {
  solanaWeb3,
  Keypair,
  Transaction,
  SystemProgram,
  LAMPORTS_PER_SOL,    } = require("solana/web3.js");



console.log(solanaWeb3);

let secretKey = Uint8Array.from([
202, 171, 192, 129, 150, 189, 204, 241, 142, 71, 205, 2, 81, 97, 2, 176, 48,
81, 45, 1, 96, 138, 220, 132, 231, 131, 120, 77, 66, 40, 97, 172, 91, 245, 84,
221, 157, 190, 9, 145, 176, 130, 25, 43, 72, 107, 190, 229, 75, 88, 191, 136,
7, 167, 109, 91, 170, 164, 186, 15, 142, 36, 12, 23,
]);



let keypair = Keypair.generate();
let fromKeypair = Keypair.generate();
let toKeypair = Keypair.generate();
let transaction = new Transaction();

transaction.add(
SystemProgram.transfer({
  fromPubkey: fromKeypair.publicKey,
  toPubkey: toKeypair.publicKey,
  lamports: LAMPORTS_PER_SOL,
})
);


const {
  sendAndConfirmTransaction,
  clusterApiUrl,
  Connection,
} = require("@solana/web3.js");

let connection = new Connection(clusterApiUrl("net"));
onClick = document.getElementById("connectSolana");
sendAndConfirmTransaction(connection, transaction, [keypair]);

const onClick = async () => {
  if (!publicKey) {
    console.log("error", "Wallet not connected!")
    notify({
      type: "error",
      message: "error",
      description: "Wallet not connected!"
    })
    return
  }
  try {
    await getTokenAccounts(publicKey.toString())
  } catch (error) {
    notify({
      type: "error",
      message: `Couldn't Find Token Accounts!`,
      description: error?.message
    })
    console.log("error", `Error finding Token Accounts! ${error?.message}`)
  }
}
