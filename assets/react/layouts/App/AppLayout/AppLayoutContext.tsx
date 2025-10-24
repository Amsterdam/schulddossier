/**
 * @license EUPL-1.2+
 * Copyright Gemeente Amsterdam
 */

import { createContext, useContext } from "react";

export type AppLayoutContextType = {
  appNavigationOpen: boolean
  // eslint-disable-next-line no-unused-vars
  setAppNavigationOpen: (open: boolean) => void
};

export const AppLayoutContext = createContext<AppLayoutContextType | undefined>(undefined);

export const useAppLayoutContext = () => {
  const context = useContext(AppLayoutContext);
  if (!context) {
    throw new Error("useAppLayoutContext must be used within an AppLayoutContext.Provider");
  }
  return context;
};
