const hre = require("hardhat");

async function main() {
  const [deployer] = await hre.ethers.getSigners();

  console.log("Deploying Auction contract with address:", deployer.address);

  const Auction = await hre.ethers.getContractFactory("Auction");
  const auction = await Auction.deploy();

  await auction.deployed();

  console.log("Auction contract deployed to:", auction.address);
}

main()
  .then(() => process.exit(0))
  .catch((error) => {
    console.error(error);
    process.exit(1);
  });